
    (function () {
      'use strict';

      var NUM_CARDS = 3;
      var items = [];
      var itemData = [];
      var dotsEls = [];
      var curEl, hintEl, leftPaneEl, exitEl, exitHeroEl, exitClipEl, exitRightEl;

      var IS_MOBILE = window.innerWidth < 1024;

      // Keep the gallery readable if a motion dependency is delayed or blocked.
      // The matching CSS presents the cards in normal document flow by default.
      if (!window.gsap || !window.ScrollTrigger || (!IS_MOBILE && !window.Lenis)) {
        var revealFallbackCards = function () {
          var fallbackCards = Array.from(document.querySelectorAll('#hs-track .hs-item'));
          if (!('IntersectionObserver' in window)) return;
          fallbackCards.forEach(function (card) { card.classList.add('hs-fallback-card'); });
          var fallbackObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
              if (!entry.isIntersecting) return;
              entry.target.classList.add('is-visible');
              fallbackObserver.unobserve(entry.target);
            });
          }, { threshold: 0.12 });
          fallbackCards.forEach(function (card) { fallbackObserver.observe(card); });
        };
        if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', revealFallbackCards, { once: true });
        } else revealFallbackCards();
        return;
      }

      var lenis;
      if (!IS_MOBILE) {
        lenis = new Lenis({
          duration: 1.8,
          easing: function (t) { return t === 1 ? 1 : 1 - Math.pow(2, -10 * t); },
          smoothWheel: true,
          wheelMultiplier: 0.9,
          touchMultiplier: 1.5,
          infinite: false
        });

        lenis.on('scroll', ScrollTrigger.update);
        gsap.ticker.add(function (time) { lenis.raf(time * 1000); });
        gsap.ticker.lagSmoothing(0);
      }

      function lerp(a, b, t) { return a + (b - a) * t; }
      function clamp01(v) { return Math.max(0, Math.min(1, v)); }

      // imgTop (vh from card top) + imgHeight (vh) define the image zone.
      // At rest: image is centered in the card (imgTop = 29vh, imgHeight = 42vh).
      // During expansion: image rises to top (imgTop → 0) and grows (imgHeight → 86vh).
      // tMeta (0→1) drives word-by-word text reveal.
      var IMG_REST_TOP = 15;   // vh — card 0 start: centered in 72vh image zone
      var IMG_REST_H   = 42;   // vh — rest state image height
      var IMG_ACTIVE_H = 72;   // vh — leaves 28vh for text zone
      var PEEK_1_TOP   = 27;   // vh — 1st peek: 12vh lower than center
      var PEEK_2_TOP   = 40;   // vh — 2nd peek: a further step down

      function getCardLayout(i, f) {
        var ACT_W   = IS_MOBILE ? 100 : 60; // keep the desktop choreography, scale the active frame to the viewport
        var PEEK_W  = IS_MOBILE ? 0 : 32;
        var PEEK2_W = IS_MOBILE ? 0 : 13;

        function ease(t) { return t; } // linear — constant velocity, no pause at phase boundaries

        // ── Phase 1: f ∈ [0,1] — all 3 expand simultaneously, same eased progress ──
        if (f <= 1) {
          var fe = ease(f);
          var l0 = IS_MOBILE ? lerp(20, 0, fe) : lerp(50, 0, fe);
          var w0 = IS_MOBILE ? lerp(60, ACT_W, fe) : lerp(28, ACT_W, fe);
          var w1 = lerp(14, PEEK_W, fe);

          if (i === 0) {
            return {
              left: l0, width: w0, opacity: 1,
              imgTop: lerp(IMG_REST_TOP, 0, fe),
              imgHeight: lerp(IMG_REST_H, IMG_ACTIVE_H, fe),
              imgBorderRadius: 0,
              tMeta: clamp01(f)
            };
          }
          if (i === 1) {
            return {
              left: l0 + w0, width: w1, opacity: IS_MOBILE ? 0 : 1,
              imgTop: PEEK_1_TOP, imgHeight: IMG_REST_H, imgBorderRadius: 0, tMeta: 0
            };
          }
          if (i === 2) {
            return {
              left: l0 + w0 + w1, width: IS_MOBILE ? 0 : lerp(8, PEEK2_W, fe), opacity: IS_MOBILE ? 0 : 1,
              imgTop: PEEK_2_TOP, imgHeight: IMG_REST_H, imgBorderRadius: 0, tMeta: 0
            };
          }
          return { left: 100, width: 0, opacity: 0, imgTop: PEEK_2_TOP, imgHeight: IMG_REST_H, imgBorderRadius: 0, tMeta: 0 };
        }

        // ── Phase 2: each transition card grows alongside active — all in motion at once ──
        var k = Math.floor(f), t = f - k;
        var te = ease(t);

        if (i < k - 1) {
          return { left: -ACT_W, width: ACT_W, opacity: 0, imgTop: 0, imgHeight: IMG_ACTIVE_H, imgBorderRadius: 0, tMeta: 0 };
        }

        // Exiting — slides left, image stays pinned the whole time
        if (i === k - 1) {
          return {
            left: lerp(0, -ACT_W, te), width: ACT_W, opacity: 1,
            imgTop: 0, imgHeight: IMG_ACTIVE_H, imgBorderRadius: 0,
            tMeta: clamp01(1 - t * 2.5)
          };
        }

        // Becoming active — starts from PEEK_W (large), expands to ACT_W
        // Both this card AND next peek are growing simultaneously
        if (i === k) {
          return {
            left: lerp(ACT_W, 0, te), width: lerp(PEEK_W, ACT_W, te), opacity: 1,
            imgTop: lerp(PEEK_1_TOP, 0, te),
            imgHeight: lerp(IMG_REST_H, IMG_ACTIVE_H, te),
            imgBorderRadius: 0,
            tMeta: clamp01(t)
          };
        }

        // Next peek — grows alongside active; imgTop lerps PEEK_2→PEEK_1 so no jump on reverse
        if (i === k + 1) {
          var lk = lerp(ACT_W, 0, te), wk = lerp(PEEK_W, ACT_W, te);
          return {
            left: lk + wk, width: lerp(PEEK2_W, PEEK_W, te), opacity: 1,
            imgTop: lerp(PEEK_2_TOP, PEEK_1_TOP, te), imgHeight: IMG_REST_H, imgBorderRadius: 0, tMeta: 0
          };
        }

        return { left: 100, width: 0, opacity: 0, imgTop: PEEK_2_TOP, imgHeight: IMG_REST_H, imgBorderRadius: 0, tMeta: 0 };
      }

      function updateCards(progress) {
        var fullIdx  = progress * (NUM_CARDS + 1);            // 0 → 4 across the full scroll
        var exitT    = clamp01(fullIdx - NUM_CARDS);          // 0→1 only during exit phase
        var floatIdx = Math.min(fullIdx, NUM_CARDS - 0.0001); // clamp: cards freeze at last state

        items.forEach(function (item, i) {
          var L = getCardLayout(i, floatIdx);

          gsap.set(item, { left: L.left + 'vw', width: L.width + 'vw', opacity: L.opacity });

          var imgWrap = item.querySelector('.hs-image-wrap');
          if (imgWrap) {
            gsap.set(imgWrap, {
              top: L.imgTop + 'vh',
              height: L.imgHeight + 'vh',
              borderRadius: L.imgBorderRadius + 'px'
            });
          }

          var data = itemData[i];
          if (data) {
            data.allWords.forEach(function (wordEl, j) {
              var wordT  = clamp01((L.tMeta - j * 0.12) / 0.6);
              var eased  = 1 - Math.pow(1 - wordT, 3);
              // sine arc: word glides in from right along a gentle curved wave path
              var arc    = Math.sin(eased * Math.PI) * 14;
              gsap.set(wordEl, {
                x:       lerp(65, 0, eased),
                y:       lerp(36, 0, eased) - arc,
                opacity: Math.min(1, wordT * 2.2)
              });
            });
          }
        });

        if (leftPaneEl) {
          var lf = floatIdx <= 1 ? Math.max(0, 1 - floatIdx * 15) : 0;
          gsap.set(leftPaneEl, { opacity: lf, pointerEvents: lf > 0.05 ? 'auto' : 'none' });
        }

        // ── Exit overlay ──────────────────────────────────────────
        if (exitEl) {
          // Phase 1 (exitT 0→0.55): hero rises inside clip wrapper (60vw × 72vh).
          //   y: 100% = 72vh below clip top (fully hidden); y: 0% = fills clip (covers image zone).
          //   The transparent clip top reveals the case study image behind as the hero climbs.
          //   The text-meta zone (72–100vh) is never touched because the clip is only 72vh tall.
          var p1  = clamp01(exitT / 0.55);
          var p1e = p1 < 0.5 ? 2*p1*p1 : 1 - Math.pow(-2*p1+2,2)/2;

          if (exitHeroEl) {
            gsap.set(exitHeroEl, {
              y: lerp(100, 0, p1e) + '%',
              pointerEvents: exitT > 0.05 ? 'auto' : 'none'
            });
          }

          // Phase 2 (exitT 0.55→0.92): right panel slides in from the right
          if (exitRightEl) {
            var rT = clamp01((exitT - 0.55) / 0.37);
            var rE = 1 - Math.pow(1 - rT, 3);
            gsap.set(exitRightEl, { x: lerp(100, 0, rE) + 'vw' });
          }
        }

        var visIdx = Math.min(Math.floor(floatIdx), NUM_CARDS - 1);
        if (curEl) curEl.textContent = String(visIdx + 1).padStart(2, '0');
        dotsEls.forEach(function (d, idx) { d.classList.toggle('active', idx === visIdx); });
        if (hintEl) hintEl.classList.toggle('hidden', progress > 0.02);
      }

      // Split an element's text into inline-block word spans
      function splitWords(el) {
        if (!el) return [];
        var words = el.textContent.trim().split(/\s+/);
        el.innerHTML = words.map(function (w) {
          return '<span class="hs-word" style="display:inline-block;will-change:transform,opacity;">' + w + '</span>';
        }).join(' ');
        return Array.from(el.querySelectorAll('.hs-word'));
      }

      function buildDots(container) {
        for (var i = 0; i < NUM_CARDS; i++) {
          var dot = document.createElement('div');
          dot.className = 'hs-dot' + (i === 0 ? ' active' : '');
          container.appendChild(dot);
          dotsEls.push(dot);
        }
      }

      document.addEventListener('DOMContentLoaded', function () {
        var outer = document.getElementById('hs-outer');
        var track = document.getElementById('hs-track');
        if (!outer || !track) return;

        // Never let the gallery pin begin underneath the shared opening hero.
        // The lens trigger is registered on window load, after this DOM-ready
        // callback, so calculate against its final refreshed end position.
        function afterOpeningHero() {
          var heroTrigger = ScrollTrigger.getById('srm-opening-lens');
          var naturalStart = outer.getBoundingClientRect().top + window.scrollY;
          return heroTrigger ? Math.max(naturalStart, heroTrigger.end + 1) : naturalStart;
        }

        // Mobile/tablet uses the same card choreography and scroll triggers below.
        if (IS_MOBILE) {
          gsap.registerPlugin(ScrollTrigger);
          ScrollTrigger.config({ ignoreMobileResize: true });
          outer.classList.add('is-mobile-stack');

          if ('IntersectionObserver' in window) {
            var mobileRevealObserver = new IntersectionObserver(function (entries) {
              entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('mob-visible');
                mobileRevealObserver.unobserve(entry.target);
              });
            }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
            document.querySelectorAll('.hs-branding-item, #hs-branding .hs-brand-panel').forEach(function (el, index) {
              el.classList.add('mob-anim');
              el.style.transitionDelay = (index * 0.07) + 's';
              mobileRevealObserver.observe(el);
            });
          }
        }

        items = Array.from(track.querySelectorAll('.hs-item'));
        curEl = document.getElementById('hs-cur');
        hintEl = document.getElementById('hs-scroll-hint');
        leftPaneEl = document.getElementById('hs-left-pane');
        exitEl      = document.getElementById('hs-exit');
        exitHeroEl  = document.getElementById('hs-exit-hero');
        exitClipEl  = document.getElementById('hs-exit-clip');
        exitRightEl = document.getElementById('hs-exit-right');

        // Initial state: hero hidden below clip zone; right panel off-screen right
        if (exitHeroEl) gsap.set(exitHeroEl, { y: '100%' });
        if (exitRightEl) gsap.set(exitRightEl, { x: '100vw' });

        // Build per-item word data and hide all words initially
        itemData = items.map(function (item) {
          var tagWords   = splitWords(item.querySelector('.hs-item-tag'));
          var titleWords = splitWords(item.querySelector('.hs-item-title'));
          var numEl      = item.querySelector('.hs-item-num');
          var allWords   = tagWords.concat(titleWords);
          if (numEl) allWords.push(numEl);
          allWords.forEach(function (el) { gsap.set(el, { x: 55, y: 38, opacity: 0 }); });
          return { allWords: allWords };
        });

        var dotsContainer = document.getElementById('hs-dots');
        if (dotsContainer) buildDots(dotsContainer);

        updateCards(0); // set initial state before ScrollTrigger

        // Fit card 0 wrap height to the image's natural aspect ratio at its rest width.
        // This removes any blurred top/bottom letterbox gap so the wrap is exactly the image size.
        var c0img = items[0] && items[0].querySelector('.hs-image-wrap img');
        function fitCard0WrapToImage() {
          if (!c0img || !c0img.naturalWidth) return;
          var restWidthPx    = (IS_MOBILE ? 60 : 28) / 100 * window.innerWidth;
          var naturalHeightPx = restWidthPx * (c0img.naturalHeight / c0img.naturalWidth);
          IMG_REST_H = Math.min(naturalHeightPx / window.innerHeight * 100, IMG_ACTIVE_H - 2);
          updateCards(0);
        }
        if (c0img) {
          if (c0img.complete && c0img.naturalWidth) { fitCard0WrapToImage(); }
          else { c0img.addEventListener('load', fitCard0WrapToImage); }
        }

        gsap.registerPlugin(ScrollTrigger);

        ScrollTrigger.create({
          trigger: outer,
          start: afterOpeningHero,
          end: function () { return '+=' + (NUM_CARDS + 1) * window.innerHeight; },
          pin: '#hs-sticky',
          pinSpacing: true,
          scrub: 1.8,
          onUpdate:    function (self) { updateCards(self.progress); },
          onLeave:     function () { updateCards(1); },
          onLeaveBack: function () { updateCards(0); }
        });

        // ── Unified shrink ScrollTrigger ─────────────────────────
        // When the branding section scrolls into view, the last case-study card,
        // the Blackbox hero, and all branding images shrink together from 60vw → 38vw.
        // Both sections are visible simultaneously during this window, making the
        // left column look like one continuous strip that compresses on scroll.
        var brandingSection = document.getElementById('hs-branding');
        var brandingColEl   = document.getElementById('hs-branding-col');

        if (brandingSection) {
          ScrollTrigger.create({
            trigger: brandingSection,
            start: 'top bottom',   // branding section just enters viewport
            end:   'top top',      // branding section reaches viewport top (~100vh of scroll)
            scrub: 1.8,
            onUpdate: function (self) {
              var t  = self.progress;
              var te = t < 0.5 ? 2*t*t : 1 - Math.pow(-2*t+2,2)/2;
              var w  = lerp(60, 38, te);

              // Last case-study card (still in DOM inside sticky, scrolling away)
              if (items[NUM_CARDS - 1]) gsap.set(items[NUM_CARDS - 1], { width: w + 'vw' });

              // Blackbox clip (also inside sticky)
              if (exitClipEl) gsap.set(exitClipEl, { width: w + 'vw' });

              // Exit right panel tracks the shrinking column edge
              if (exitRightEl) gsap.set(exitRightEl, { left: w + 'vw', width: (100 - w) + 'vw' });

              // Branding column
              if (brandingColEl) {
                gsap.set(brandingColEl, { width: w + 'vw' });
                if (IS_MOBILE) brandingColEl.style.setProperty('--srm-mobile-brand-width', w + 'vw');
              }
            }
          });
        }

        // ── Website Showcase Transition ──────────────────────────
        // When the last branding item (Tech Grandha) is fully in view:
        //   1. #hs-branding is pinned — freezing the branding column visible on the left.
        //   2. #ws-sticky (transparent) overlays it and pins at the same moment.
        //   3. #ws-panel slides in from the right (100vw → 0).
        //   4. Once the panel's left edge touches the branding column's right edge (60vw),
        //      it pushes the frozen branding off to the left.
        //
        // #ws-outer has margin-top:-100vh so "top top" fires when Tech Grandha
        // bottom = viewport bottom — no clone image needed.
        var wsOuter      = document.getElementById('ws-outer');
        var wsPanel      = document.getElementById('ws-panel');
        var brandingSect = document.getElementById('hs-branding');
        var wpCards      = Array.from(document.querySelectorAll('.wp-card'));
        var NUM_WP       = wpCards.length;

        // Scroll budget: 2.5vh for ws panel slide-in, 1vh per wp card reveal
        var WS_SCROLL    = 2.5;
        var TOTAL_SCROLL = WS_SCROLL + NUM_WP;   // 5.5
        var WS_FRAC      = WS_SCROLL / TOTAL_SCROLL;
        var CARD_FRAC    = 1 / TOTAL_SCROLL;

        if (wsOuter && wsPanel && brandingSect) {
          gsap.set(wsPanel, { x: '100vw' });
          if (brandingColEl) gsap.set(brandingColEl, { x: '0vw' });

          // Init wp cards: fully hidden (zero-area point at bottom-right)
          wpCards.forEach(function (card, i) {
            gsap.set(card, {
              zIndex: i + 2,
              clipPath: 'inset(100% 0% 0% 100%)'
            });
          });

          // Pin the branding section for the full scroll budget
          ScrollTrigger.create({
            trigger: wsOuter,
            start: 'top top',
            end: function () { return '+=' + (TOTAL_SCROLL * window.innerHeight); },
            pin: brandingSect,
            pinSpacing: false
          });

          // Pin ws-sticky and drive the full sequence
          ScrollTrigger.create({
            trigger: wsOuter,
            start: 'top top',
            end: function () { return '+=' + (TOTAL_SCROLL * window.innerHeight); },
            pin: '#ws-sticky',
            pinSpacing: true,
            scrub: 1.8,
            onUpdate: function (self) {
              var t = self.progress;

              // ── Phase 1: ws panel slides in from right ──
              var wsT  = clamp01(t / WS_FRAC);
              var wsTe = wsT < 0.5 ? 4*wsT*wsT*wsT : 1 - Math.pow(-2*wsT+2,3)/2;
              var panelX = lerp(100, 0, wsTe);
              gsap.set(wsPanel, { x: panelX + 'vw' });
              var colW = brandingColEl
                ? (brandingColEl.offsetWidth / window.innerWidth * 100)
                : 38;
              var brandX = Math.min(0, panelX - colW);
              gsap.set(brandingColEl, { x: brandX + 'vw' });

              // ── Phase 2: wp cards grow from bottom-right corner ──
              wpCards.forEach(function (card, i) {
                var cardStart = WS_FRAC + i * CARD_FRAC;
                var lt = clamp01((t - cardStart) / CARD_FRAC);
                var et = lt < 0.5 ? 4*lt*lt*lt : 1 - Math.pow(-2*lt+2,3)/2;
                var top  = lerp(100, 0, et);
                var left = lerp(100, 0, et);
                gsap.set(card, {
                  clipPath: 'inset(' + top + '% 0% 0% ' + left + '%)'
                });
              });
            },
            onLeaveBack: function () {
              gsap.set(wsPanel, { x: '100vw' });
              gsap.set(brandingColEl, { x: '0vw' });
              wpCards.forEach(function (card) {
                gsap.set(card, { clipPath: 'inset(100% 0% 0% 100%)' });
              });
            }
          });

          // ── "View All Projects" → scroll so Arena card is fully revealed ──
          var wsCta = document.querySelector('.ws-cta');
          if (wsCta) {
            wsCta.addEventListener('click', function (e) {
              e.preventDefault();
              // Find the ws-sticky ScrollTrigger
              var wsST = ScrollTrigger.getAll().find(function (st) {
                return st.vars && st.vars.pin === '#ws-sticky';
              });
              if (!wsST) return;
              // Progress just past card 0 (Arena) being fully revealed
              var targetProgress = WS_FRAC + CARD_FRAC * 1.05;
              var targetY = wsST.start + targetProgress * (wsST.end - wsST.start);
              if (lenis) {
                lenis.scrollTo(targetY, {
                  duration: 2,
                  easing: function (t) { return 1 - Math.pow(1 - t, 4); }
                });
              } else {
                window.scrollTo({ top: targetY, behavior: 'smooth' });
              }
            });
          }
        }
      });

    })();
  
