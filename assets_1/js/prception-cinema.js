(function () {
  var startMovieLens = function () {
    var hero = document.querySelector('.srm-about-lens');
    if (!hero) return;
    if (hero.dataset.srmLensInitialized === 'true') return;
    if (!window.gsap || !window.ScrollTrigger) { hero.classList.add('is-static'); return; }
    hero.dataset.srmLensInitialized = 'true';
    var gsap = window.gsap;
    var ScrollTrigger = window.ScrollTrigger;
    gsap.registerPlugin(ScrollTrigger);

    var stage = hero.querySelector('.ab-hero-stage');
    var see = hero.querySelector('.ab-hero-layer.is-see');
    var story = hero.querySelector('.ab-story');
    var slot = hero.querySelector('.ab-story-lens');
    var focus = hero.querySelector('.ab-hero-focus');
    if (!stage || !see || !story || !slot) return;

    var rest = { fx: 0.62, fy: 0.62 };
    var lens = { fx: rest.fx, fy: rest.fy, r: 0, grow: 0, lock: 0 };
    var w = 0, h = 0, above = 0, below = 0, radius = 0;
    var target = { x: 0, y: 0, r: 0 };
    var small = window.matchMedia('(max-width: 767px)').matches;
    hero.classList.add('is-live');

    function measure() {
      w = stage.offsetWidth;
      h = stage.offsetHeight;
      above = stage.offsetTop;
      below = hero.offsetHeight - above - h;
      var pad = window.getComputedStyle(stage);
      gsap.set(see, {
        top: -above,
        bottom: -below,
        paddingTop: (parseFloat(pad.paddingTop) || 0) + above,
        paddingBottom: (parseFloat(pad.paddingBottom) || 0) + below
      });
      radius = small ? window.innerWidth * 0.22 : gsap.utils.clamp(90, 210, window.innerWidth * 0.12);
      var heroBox = hero.getBoundingClientRect();
      var slotBox = slot.getBoundingClientRect();
      target.x = slotBox.left - heroBox.left + slotBox.width / 2;
      target.y = slotBox.top - heroBox.top + slotBox.height / 2;
      target.r = slotBox.height / 2;
    }

    function render() {
      if (!w || !h) return;
      var x = lens.fx * w;
      var cy = lens.fy * h + above;
      var far = Math.hypot(Math.max(x, w - x), Math.max(cy, h + above + below - cy));
      var lx = gsap.utils.interpolate(x, target.x, lens.lock);
      var ly = gsap.utils.interpolate(cy, target.y, lens.lock);
      var lr = gsap.utils.interpolate(lens.r * radius + lens.grow * far, target.r, lens.lock);
      stage.style.setProperty('--lx', lx + 'px');
      stage.style.setProperty('--ly', (ly - above) + 'px');
      stage.style.setProperty('--cy', ly + 'px');
      stage.style.setProperty('--lr', lr + 'px');
      if (focus) focus.textContent = 'X ' + lens.fx.toFixed(2) + ' · Y ' + lens.fy.toFixed(2);
    }

    var onResize = function () { measure(); ScrollTrigger.refresh(); };
    var onRefresh = function () { measure(); };
    gsap.ticker.add(render);
    window.addEventListener('resize', onResize, { passive: true });
    ScrollTrigger.addEventListener('refresh', onRefresh);
    measure();

    var intro = gsap.timeline({ delay: small ? 0.08 : 0.4 });
    intro.from(hero.querySelectorAll('.ab-hero-corner'), { scale: 2.2, opacity: 0, duration: 1, stagger: 0.05, ease: 'power3.out' }, 0);
    intro.from(hero.querySelectorAll('.ab-hero-readout'), { opacity: 0, duration: 0.6, stagger: 0.08 }, 0.5);
    intro.from(hero.querySelectorAll('.ab-hero-line > span'), { yPercent: 105, duration: 1.2, stagger: 0.12, ease: 'power4.out' }, 0.1);
    intro.from(hero.querySelectorAll('.ab-hero-note'), { yPercent: 120, opacity: 0, duration: 0.9, ease: 'power3.out' }, 0.7);
    intro.to(lens, { r: 1, duration: 1.1, ease: 'power3.out' }, 0.9);
    intro.from(hero.querySelector('.ab-hero-lens'), { opacity: 0, duration: 0.6 }, 1.1);
    intro.from(hero.querySelector('.ab-hero-foot'), { y: 30, opacity: 0, duration: 0.9, ease: 'power3.out' }, 0.8);

    var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    if (finePointer) {
      var quickX = gsap.quickTo(lens, 'fx', { duration: 0.7, ease: 'power3.out' });
      var quickY = gsap.quickTo(lens, 'fy', { duration: 0.7, ease: 'power3.out' });
      stage.addEventListener('pointermove', function (event) {
        var box = stage.getBoundingClientRect();
        quickX(gsap.utils.clamp(0, 1, (event.clientX - box.left) / box.width));
        quickY(gsap.utils.clamp(0, 1, (event.clientY - box.top) / box.height));
      }, { passive: true });
      stage.addEventListener('pointerleave', function () { quickX(rest.fx); quickY(rest.fy); }, { passive: true });
    } else {
      gsap.timeline({ repeat: -1, delay: 2, defaults: { duration: 2.6, ease: 'sine.inOut' } })
        .to(lens, { fx: 0.3, fy: 0.3 }).to(lens, { fx: 0.55, fy: 0.25 })
        .to(lens, { fx: 0.5, fy: 0.72 }).to(lens, { fx: rest.fx, fy: rest.fy });
    }

    var say = hero.querySelector('.ab-hero-layer.is-say');
    var seeLines = hero.querySelectorAll('.ab-hero-see-type .ab-hero-line > span');
    var storyKicker = story.querySelector('.ab-story-kicker');
    var storyLines = story.querySelectorAll('.ab-story-line');
    var hidden = { autoAlpha: 0 };
    var shown = function (vars) { return Object.assign({ autoAlpha: 1, duration: 0.45, ease: 'power3.out' }, vars); };
    var strike = story.querySelector('.ab-story-strike i');
    var storyFoot = story.querySelector('.ab-story-foot');
    var scroll = gsap.timeline({
      // End the pin on the last story beat so the following gallery starts as
      // soon as the footer rule and copy have finished revealing.
      scrollTrigger: {
        id: 'srm-opening-lens', trigger: hero, start: 'top top',
        end: function () { return '+=' + (window.innerWidth < 1024 ? '250%' : '390%'); },
        pin: true, pinSpacing: true, scrub: 1, anticipatePin: 1,
        refreshPriority: 10, invalidateOnRefresh: true
      }
    });
    scroll.fromTo([hero.querySelector('.ab-hero-foot'), hero.querySelector('.ab-hero-lens'), hero.querySelector('.ab-hero-frame')], { autoAlpha: 1 }, { autoAlpha: 0, duration: 0.25, ease: 'none', immediateRender: false }, 0);
    scroll.to(lens, { grow: 1, duration: 0.5, ease: 'power2.in' }, 0);
    scroll.to(hero.querySelector('.ab-hero-tint'), { opacity: 0, duration: 0.25 }, 0.45);
    scroll.fromTo(hero.querySelector('.ab-hero-see-type'), { scale: 1.06, opacity: 1 }, { scale: 1.25, opacity: 0, duration: 0.35, ease: 'power1.in', immediateRender: false }, 0.5);
    scroll.fromTo(say, { autoAlpha: 1 }, { autoAlpha: 0, duration: 0.05, immediateRender: false }, 0.6);
    scroll.to(lens, { grow: 0, lock: 1, duration: 0.7, ease: 'power3.inOut' }, 1);
    scroll.fromTo(storyKicker, hidden, shown({ y: 0 }), 1.1);
    scroll.fromTo(storyLines[0].querySelector('.is-l'), Object.assign({}, hidden, { x: -90 }), shown({ x: 0, duration: 0.6 }), 1.2);
    scroll.fromTo(storyLines[0].querySelector('.is-r'), Object.assign({}, hidden, { x: 90 }), shown({ x: 0, duration: 0.6 }), 1.2);
    scroll.fromTo(storyLines[1].querySelectorAll('.ab-story-w'), Object.assign({}, hidden, { y: 40 }), shown({ y: 0, stagger: 0.08 }), 1.85);
    scroll.fromTo(strike, { scaleX: 0 }, { scaleX: 1, duration: 0.4, ease: 'power2.inOut' }, 2.4);
    scroll.fromTo(story.querySelector('.ab-story-strike .ab-story-w'), { opacity: 1 }, { opacity: 0.3, duration: 0.3, immediateRender: false }, 2.55);
    scroll.fromTo(storyLines[2].querySelectorAll('.ab-story-w'), Object.assign({}, hidden, { y: 40 }), shown({ y: 0, stagger: 0.1 }), 2.95);
    scroll.fromTo(slot, { opacity: 0 }, { opacity: 1, duration: 0.3 }, 3.4);
    scroll.fromTo(storyFoot, Object.assign({}, hidden, { y: 30 }), shown({ y: 0 }), 3.45);

    measure();
    ScrollTrigger.refresh();
  };
  // This file is deferred after GSAP/ScrollTrigger, so initialize before the
  // gallery's DOMContentLoaded triggers measure their positions. Waiting for
  // window.load caused the lens to flash at its CSS size, collapse, then reopen.
  startMovieLens();
  var lensStages = document.querySelectorAll('[data-srm-lens]');
  if (lensStages.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      var lensObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('is-visible');
          lensObserver.unobserve(entry.target);
        });
      }, { threshold: 0.2 });
      Array.prototype.forEach.call(lensStages, function (stage) { lensObserver.observe(stage); });
    } else Array.prototype.forEach.call(lensStages, function (stage) { stage.classList.add('is-visible'); });
  }
  Array.prototype.forEach.call(document.querySelectorAll('[data-srm-slide]'), function (button) {
    button.addEventListener('click', function () {
      var track = document.querySelector('[data-srm-track]');
      if (track) track.scrollBy({ left: Number(button.getAttribute('data-srm-slide')) * track.clientWidth * 0.78, behavior: 'smooth' });
    });
  });
  var root = document.documentElement;
  var items = Array.prototype.slice.call(document.querySelectorAll('.prc-cinema-hero [data-prc-reveal]'));
  if (!items.length || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  root.classList.add('prc-motion-ready');
  if (!('IntersectionObserver' in window)) {
    items.forEach(function (item) { item.classList.add('is-visible'); });
    return;
  }
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-visible');
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.14 });
  items.forEach(function (item, index) {
    item.style.transitionDelay = (index * 90) + 'ms';
    observer.observe(item);
  });
})();
