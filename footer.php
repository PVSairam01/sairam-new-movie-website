<link rel="stylesheet" href="assets_1/css/sairam-shell.css">
<link rel="stylesheet" href="assets_1/css/sairam-footer.css">
<footer class="footer_new_section">
  <div class="container-fluid footer_new_section_container">

    <div class="row footer_new_section_top">

      <!-- Column 1: Logo and About -->
      <div class="col-12 col-md-6 col-xl-4 footer_new_section_column footer_new_section_brand">
        <div class="footer_new_section_logo">
          <a href="index.php" aria-label="Sairam Movie Hub"><img src="assets_1/images/movies/sairam-movie-logo-removebg-preview.png" alt="Sairam Movie Hub" style="max-width:190px;height:auto"></a>
          <!-- Original footer SVG: <svg class="bc-logo-svg bc-logo-svg-white" viewBox="0 0 620 240"><use href="#bc-logo-white"></use></svg> -->
          
        </div>

        <p class="footer_new_section_about">Sairam Movie Hub brings you movie discovery, popular trailers, and easy ticket booking.</p>

        <!-- Social Icons: Mobile and Tablet -->
        <div class="footer_new_section_social footer_new_section_social_mobile">
          <a href="https://www.facebook.com/share/1AkKiwQYYR/"
            target="_blank" rel="noopener noreferrer" aria-label="Facebook">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://www.instagram.com/sairam.patchipala/"
            target="_blank" rel="noopener noreferrer" aria-label="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
        </div>
      </div>

      <!-- Column 2: Social Icons for Desktop -->
      <div class="col-xl-4 footer_new_section_column footer_new_section_social_desktop">
        <div class="footer_new_section_social_wrapper">
          <h6 class="footer_new_section_social_heading">CONNECT WITH US</h6>

          <div class="footer_new_section_social">
            <a href="https://www.facebook.com/share/1AkKiwQYYR/"
              target="_blank" rel="noopener noreferrer" aria-label="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="https://www.instagram.com/sairam.patchipala/"
              target="_blank" rel="noopener noreferrer" aria-label="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Column 3: Contact Information -->
      <div class="col-12 col-md-6 col-xl-4 footer_new_section_column footer_new_section_contact">
        <div class="footer_new_section_contact_inner">
          <h6 class="footer_new_section_contact_heading">Contact Us</h6>

          <ul class="footer_new_section_contact_list">
            <li>
              <i class="bi bi-geo-alt"></i>
              <span>Kakinada, Andhra Pradesh, India</span>
            </li>
            <li>
              <i class="bi bi-telephone"></i>
              <a href="tel:+919390717011" target="_blank" rel="noopener noreferrer">+91 9390717011</a>
            </li>
            <li>
              <i class="bi bi-envelope"></i>
              <a href="mailto:sairampachipala00@gmail.com" target="_blank" rel="noopener noreferrer">
                sairampachipala00@gmail.com
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Bottom Copyright -->
    <div class="footer_new_section_bottom">
      <p class="footer_new_section_copyright">ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â© 2026 Sairam Movie Hub. All Rights Reserved.</p>
    </div>

  </div>
</footer>



<!-- Floating Widgets: WhatsApp Chat with us & Back to Top Arrow -->
<div class="floating-widgets">
  <a href="https://api.whatsapp.com/send?phone=919390717011" class="wa-widget" target="_blank" aria-label="Chat on WhatsApp">
    <span class="wa-badge">Chat with us</span>
    <span class="wa-circle"><i class="fa-brands fa-whatsapp"></i></span>
  </a>
  <a href="#" class="back-to-top" id="btnBackToTop" aria-label="Back to top">
    <i class="fa-solid fa-arrow-up"></i>
  </a>
</div>

<?php if (!empty($moviePageShell)): ?>
<script>
  (function () {
    var button = document.getElementById('btnBackToTop');
    if (button) {
      function updateTopButton() {
        button.classList.toggle('show', window.scrollY > 300);
        var maxScroll = document.documentElement.scrollHeight - window.innerHeight;
        var progress = maxScroll > 0 ? Math.min(100, Math.max(0, window.scrollY / maxScroll * 100)) : 0;
        button.style.setProperty('--p', progress + '%');
      }
      window.addEventListener('scroll', updateTopButton, { passive: true });
      window.addEventListener('resize', updateTopButton);
      button.addEventListener('click', function (event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
      updateTopButton();
    }

    var wa = document.querySelector('.wa-widget');
    if (!wa) return;
    wa.classList.add('js');
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      wa.classList.add('open');
      return;
    }
    var hover = false;
    var open = function () { wa.classList.add('open'); };
    var shut = function () { wa.classList.remove('open'); };
    var cycle = function () {
      open();
      window.setTimeout(function () { if (!hover) shut(); }, 6000);
    };
    window.setTimeout(cycle, 2000);
    window.setInterval(cycle, 16000);
    wa.addEventListener('mouseenter', function () { hover = true; open(); });
    wa.addEventListener('mouseleave', function () { hover = false; shut(); });
    wa.addEventListener('focus', open);
    wa.addEventListener('blur', shut);
  })();
</script>
<?php return; endif; ?>


<script src="assets/js/main.js?v=20261017-1"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
  (function() {
    if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
    var pendingHash = location.hash;
    if (pendingHash) history.replaceState(null, '', location.pathname + location.search);
    window.scrollTo(0, 0);

    var $ = function(s, r) {
        return (r || document).querySelector(s)
      },
      $$ = function(s, r) {
        return [].slice.call((r || document).querySelectorAll(s))
      },
      pad = function(n) {
        return String(n).padStart(2, '0')
      };

    /* Back to Top Button Toggle Script */
    var btnTop = $('#btnBackToTop');
    window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
        btnTop.classList.add('show');
      } else {
        btnTop.classList.remove('show');
      }
    });

        btnTop.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });

      /* smooth scroll aipoyaka hero timeline ni 0 ki force reset */
      var tries = 0;
      var chk = setInterval(function() {
        tries++;
        if (window.scrollY <= 1 || tries > 60) {
          clearInterval(chk);
          if (window.ScrollTrigger) {
            ScrollTrigger.update();
            var m = ScrollTrigger.getAll().filter(function(t) {
              return t.trigger && t.trigger.classList && t.trigger.classList.contains('index_first_section');
            })[0];
            if (m && m.animation) {
              m.animation.progress(0);
            }
          }
          var ifsEl = document.querySelector('.index_first_section');
          if (ifsEl) ifsEl.classList.remove('morph-active');
        }
      }, 50);
    });

    /* ---- data (edit here) ---- */

    /* SITES:
       [name, tagline, fallback colour, media file, live site url]
    */

    var SITES = [
      ['Spider-Man: No Way Home', 'Marvel | Superhero', '#102b58', 'assets_1/images/movies/spiderman-noway-home-movie.jpg', 'latest-movies.php'],
      ['Pushpa 2: The Rule', 'Telugu | Action', '#7a321d', 'assets_1/images/movies/pushpa-2-movie.jpg', 'latest-movies.php'],
      ['The Batman', 'DC | Crime Thriller', '#211a19', 'assets_1/images/movies/the-batman-movie.avif', 'latest-movies.php'],
      ['Tillu Square', 'Telugu | Comedy', '#9b5441', 'assets_1/images/movies/Tillu-square-movie.jpg', 'latest-movies.php'],
      ['Veerupaksha', 'Telugu | Mystery Thriller', '#26394b', 'assets_1/images/movies/veerupaksha-movie.jfif', 'latest-movies.php'],
      ['Kalki 2898 AD', 'Telugu | Sci-Fi Epic', '#92714b', 'assets_1/images/movies/kalki.webp', 'latest-movies.php'],
      ['Devara', 'Telugu | Action Drama', '#26272b', 'assets_1/images/movies/devara-1-movie.webp', 'latest-movies.php'],
      ['Mission: Impossible - Dead Reckoning', 'Action | Spy Thriller', '#243957', 'assets_1/images/movies/Mission-impossible-movie.jpg', 'latest-movies.php']
    ];
    /* new brands: images load from assets/img/<name>.webp; a missing file is simply skipped */
    function bi(alt, files) {
      return files.map(function(f, i) {
        return '<div><img src="assets/img/' + f + '.webp" alt="' + alt + (i ? ' board ' + i : '') + '" onerror="this.parentNode.remove()"></div>'
      }).join('')
    }

    var BRANDS = [
      ['Telugu Hits', 'Popular Telugu movies', 'Discover Telugu favourites and the latest releases, explore the trailers, and find a movie for your next night out.', '', '', [],
        '<div><img src="assets_1/images/movies/Animals.webp" alt="Animals movie poster"></div>' +
        '<div><img src="assets_1/images/movies/Pushpa-2-theRule.png" alt="Pushpa 2 movie poster"></div>' +
        '<div><img src="assets_1/images/movies/devara-1-movie.webp" alt="Devara movie poster"></div>'
      ],
      ['Now Showing', 'Movies to watch now', 'Browse popular movies, check the details, and choose a showtime that works for you.', '', '', [],
        '<div><img src="assets_1/images/movies/12A-Railway-Colony.webp" alt="12A Railway Colony movie poster"></div>' +
        '<div><img src="assets_1/images/movies/Lenin.webp" alt="Lenin movie poster"></div>' +
        '<div><img src="assets_1/images/movies/Vanaveera.webp" alt="Vanaveera movie poster"></div>'
      ],
      ['Trailers', 'Watch before you book', 'Get a preview of the stories, action, and performances waiting for you on the big screen.', '', '', [],
        '<div><img src="assets_1/images/movies/kalki-poster.png" alt="Kalki movie poster"></div>' +
        '<div><img src="assets_1/images/movies/game-changer-poster.png" alt="Game Changer movie poster"></div>' +
        '<div><img src="assets_1/images/movies/virupaksha-poster.png" alt="Virupaksha movie poster"></div>'
      ],
      ['Action & Adventure', 'Big-screen action', 'Explore action-packed adventures and larger-than-life stories for your next cinema experience.', '', '', [],
        '<div><img src="assets_1/images/movies/Avengers-assemble.webp" alt="Avengers Assemble movie poster"></div>' +
        '<div><img src="assets_1/images/movies/Avatar-The-Way-of-Water-2022.webp" alt="Avatar movie poster"></div>' +
        '<div><img src="assets_1/images/movies/Mission-impossible-movie.jpg" alt="Mission Impossible movie poster"></div>'
      ],
      ['Coming Soon', 'Upcoming movies', 'Keep an eye on upcoming releases and plan ahead for the movies you are excited to see.', '', '', [],
        '<div><img src="assets_1/images/movies/Ramayana-part-1.webp" alt="Ramayana movie poster"></div>' +
        '<div><img src="assets_1/images/movies/peddi.jpg" alt="Peddi movie poster"></div>' +
        '<div><img src="assets_1/images/movies/Nagabandham.jpg" alt="Nagabandham movie poster"></div>'
      ]
    ];
    var STEPS = [
      ['Discover', 'Browse movies and find a story you want to see.'],
      ['Explore', 'Watch trailers and check movie details.'],
      ['Choose', 'Pick a theatre and available showtime.'],
      ['Book', 'Select your seats and complete your booking.'],
      ['Get Ready', 'Keep your booking details handy for the show.'],
      ['Enjoy', 'Sit back and enjoy the movie on the big screen.']
    ];

    var CLIENTS = ['Telugu Hits', 'Now Showing', 'Trending Movies', 'Movie Trailers', 'Action & Adventure', 'Family Favourites', 'New Releases', 'Sairam Movie Hub'];

    var WISHES = ['a great movie night', 'the latest Telugu hit', 'a thrilling adventure', 'a perfect family movie', 'a new story to discover', 'the best seats in the theatre', 'a movie everyone loves', 'a memorable night out'];

    /* ---- build DOM ---- */

    /* Web Work tiles: each tile is a live-site link with its preview video */
    window.buildWorkTiles(SITES);

    BRANDS.forEach(function(b) {
      var s = document.createElement('article');
      s.className = 'scene';

      /* set the variables only when a colour is given, otherwise the CSS fallback is used */
      var vars = '';
      if (b[3]) vars += '--b:' + b[3] + ';';
      if (b[4]) vars += '--i:' + b[4] + ';';
      if (vars) s.style.cssText = vars;

      var imgs = b[6];

      /* palette only when there are real colour codes */
      var colors = (b[5] || []).filter(function(c) {
        return c && c.trim()
      });
      var palHtml = colors.length ?
        '<div class="pal">' + colors.map(function(c) {
          return '<span><i style="background:' + c + '"></i>' + c + '</span>'
        }).join('') + '</div>' :
        '';

      s.innerHTML = '<span class="gt">' + b[0] + '</span><div class="in"><div><small class="num"></small><h3>' + b[0] + '</h3><span class="tg">' + b[1] + '</span><p>' + b[2] + '</p>' + palHtml + '</div><div class="brand-gallery" aria-label="' + b[0] + ' brand images"><div class="tr">' + imgs + '</div></div></div>';

      var brandIndex = BRANDS.indexOf(b);
      var slideControls = document.createElement('div');
      slideControls.className = 'brand-slide-controls';
      slideControls.innerHTML = '<button type="button" data-brand-step="-1" aria-label="Previous movie category"><i class="bi bi-arrow-left" aria-hidden="true"></i></button><button type="button" data-brand-step="1" aria-label="Next movie category"><i class="bi bi-arrow-right" aria-hidden="true"></i></button>';
      $('.brand-gallery', s).appendChild(slideControls);
      s.dataset.brandIndex = brandIndex;

      $('#bs').appendChild(s);
    });

    $$('.scene .num').forEach(function(e, i) {
      e.textContent = pad(i + 1) + ' / ' + pad(BRANDS.length)
    });
    $('#bc').textContent = pad(BRANDS.length);
    /* split scene titles into letters (single line, animated per letter) */
    $$('.scene h3').forEach(function(h) {
      var t = h.textContent;
      h.setAttribute('aria-label', t);
      h.textContent = '';
      t.split('').forEach(function(c) {
        var s = document.createElement('span');
        s.className = 'tc' + (c === ' ' ? ' ts' : '');
        s.setAttribute('aria-hidden', 'true');
        s.textContent = c === ' ' ? '\u00A0' : c;
        h.appendChild(s);
      });
    });

    STEPS.forEach(function(s, i) {
      var l = document.createElement('li');
      l.className = 'st';
      l.innerHTML = '<b>' + pad(i + 1) + '</b><h3>' + s[0] + '</h3><p>' + s[1] + '</p>';
      $('#sp').appendChild(l)
    });

    $('#mt').innerHTML = CLIENTS.concat(CLIENTS).map(function(c) {
      return '<span>' + c + '</span>'
    }).join('');

    /* Spread wishes across separate lanes: no randomized text collisions. */
    var geniePhrases = [
      'Find a movie everyone loves', 'Plan a great movie night', 'Watch a new Telugu hit',
      'See the latest trailers', 'Choose your seats', 'Book tickets with ease',
      'Discover a family favourite', 'Explore an action adventure', 'Find a new release',
      'See what is trending', 'Enjoy the big screen', 'Pick a movie for tonight',
      'Catch an upcoming release', 'Watch a story worth sharing', 'Check local showtimes',
      'Browse movies by genre', 'Find your next favourite', 'Book a theatre show',
      'Explore popular movies', 'Plan an evening out',
      'Discover global favourites', 'Watch Telugu cinema',
      'Make tonight a movie night', 'Your next movie awaits'
    ];
    /* Percentage layout, alternating directions and layers; left/top can extend beyond frame. */
    var genieCoords = [
      [-2, 1],
      [25, 4],
      [51, 1],
      [75, 5],
      [4, 15],
      [33, 19],
      [61, 16],
      [84, 20],
      [1, 30],
      [30, 32],
      [72, 32],
      [87, 37],
      [-4, 49],
      [19, 52],
      [76, 51],
      [89, 57],
      [3, 68],
      [27, 72],
      [59, 70],
      [81, 74],
      [0, 86],
      [32, 89],
      [62, 86],
      [83, 91]
    ];
    var wishField = $('#gw');
    geniePhrases.forEach(function(phrase, i) {
      var w = document.createElement('span'),
        loc = genieCoords[i];
      w.className = 'gwish ' + (i % 5 === 0 ? 'far' : i % 3 === 0 ? 'near' : '') + (i % 7 === 0 ? ' mobile-hidden' : '');
      w.textContent = phrase;
      w.style.left = loc[0] + '%';
      w.style.top = loc[1] + '%';
      w.style.opacity = i % 5 === 0 ? '.20' : i % 3 === 0 ? '.75' : '.55';
      w.dataset.depth = i % 5 === 0 ? 'far' : i % 3 === 0 ? 'near' : 'mid';
      wishField.appendChild(w);
    });

    $('#f').onsubmit = function(e) {
      e.preventDefault();
      $('.go').textContent = 'ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã¢â‚¬Â¦ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã¢â‚¬Å“'
    };

    /* ---- animations ---- */

    function boot() {

      var mobileScroll = matchMedia('(max-width:600px)');

      function scrollDistance(desktop, mobile) {
        return mobileScroll.matches ? mobile * 0.78 : desktop
      }

      if (!window.gsap || !window.ScrollTrigger || matchMedia('(prefers-reduced-motion:reduce)').matches) {
        $$('[data-n][data-s]').forEach(function(e) {
          e.textContent = e.dataset.n + e.dataset.s
        });
        return;
      }

      gsap.registerPlugin(ScrollTrigger);
      ScrollTrigger.config({
        ignoreMobileResize: true
      });

      /* hero */

      // ===== hero: index_first_section =====
      // footer.php lo boot() lopala, old hero block ni (gsap.from('.h', ...) nundi morph timeline last line  .to({},{duration:.24});  varaku)
      // delete chesi, ee motham code ni pettandi.

      // entrance is CSS-only (see index_first_section.css), so there is no gsap.from('.h') here.
      // bfcache restore: re-measure so the stage never stays in a wrong state.
      addEventListener('pageshow', function(e) {
        if (e.persisted) requestAnimationFrame(function() {
          ScrollTrigger.refresh();
          ScrollTrigger.update()
        });
      });

      $$('[data-n][data-s]').forEach(function(e) {
        var o = {
            v: 0
          },
          n = +e.dataset.n;
        gsap.to(o, {
          v: n,
          duration: 2,
          delay: 1,
          ease: 'power2.out',
          onUpdate: function() {
            e.textContent = (n % 1 ? o.v.toFixed(1) : Math.round(o.v)) + e.dataset.s
          }
        })
      });

      /* PRCEPTION -> centered brand moment: text + caption + button centered together in the viewport */

      var ifs = $('.index_first_section'),
        ifsStage = $('.ifs-stage', ifs),
        giant = $('.giant', ifs),
        cap = $('.morph-caption', ifs),
        cta = $('.morph-cta', ifs);

      function L() {
        var px = Number(gsap.getProperty(giant, 'x')) || 0,
          py = Number(gsap.getProperty(giant, 'y')) || 0,
          ps = Number(gsap.getProperty(giant, 'scale')) || 1;
        /* measured relative to the stage, so the result is the same at any scroll position */
        var sr = ifsStage.getBoundingClientRect(),
          r = giant.getBoundingClientRect(),
          w0 = r.width / ps,
          h0 = r.height / ps;
        var cx0 = r.left - sr.left + r.width / 2 - px,
          cy0 = r.top - sr.top + r.height / 2 - py;
        var W = sr.width,
          H = sr.height;
        var target = W > 1200 ? Math.min(W * .36, 720) : (W > 991 ? W * .6 : W * .7);
               var s = Math.min(1, target / w0),
          th = h0 * s * .78;
        var capH = cap.offsetHeight,
          btnH = cta.offsetHeight,
                    g1 = Math.min(H * .06, 36),
          g2 = Math.min(H * .09, 48);
        var top = (H - (th + g1 + capH + g2 + btnH)) / 2 + H * .03;
        return {
          x: W / 2 - cx0,
          y: top + th / 2 - cy0,
          scale: s,
          capTop: top + th + g1,
          ctaTop: top + th + g1 + capH + g2
        };
      }

      /* no pin: the stage is position:sticky inside a 225vh section, so there is no pin-spacer to go out of sync */
      var morph = gsap.timeline({
        scrollTrigger: {
          trigger: ifs,
          start: 'top top',
          end: 'bottom bottom',
          // scrub: 0.65,
             scrub: 0.3,
          invalidateOnRefresh: true,

          onUpdate: function(self) {
            ifs.classList.toggle('morph-active', self.progress > .78)
          }
        }
      });

      morph.fromTo('.index_first_section .wrap,.index_first_section .deco', {
          autoAlpha: 1,
          y: 0
        }, {
          autoAlpha: 0,
          y: -65,
          duration: .36,
          ease: 'power1.inOut'
        }, 0)

        .fromTo('.hero-morph', {
          autoAlpha: 0
        }, {
          autoAlpha: 1,
          duration: .5,
          ease: 'none'
        }, .10)

        .fromTo('.hero-morph', {
          '--mz': 1.14,
          '--mb': 26
        }, {
          '--mz': 1,
          '--mb': 14,
          duration: .9,
          ease: 'power2.out'
        }, .10)

        .to(giant, {
          x: function() {
            return L().x
          },
          y: function() {
            return L().y
          },
          scale: function() {
            return L().scale
          },
          duration: .85,
          ease: 'power2.inOut'
        }, .08)

        .fromTo(cap, {
          top: function() {
            return L().capTop + 28
          }
        }, {
          top: function() {
            return L().capTop
          },
          autoAlpha: 1,
          duration: .28,
          ease: 'power2.out',
          immediateRender: false
        }, .64)

        .fromTo(cta, {
          top: function() {
            return L().ctaTop + 28
          }
        }, {
          top: function() {
            return L().ctaTop
          },
          autoAlpha: 1,
          duration: .24,
          ease: 'power2.out',
          immediateRender: false
        }, .75)

        .to({}, {
          duration: .24
        });

      /* reveals */

      $$('.rv').forEach(function(e) {
        gsap.from(e, {
          y: 60,
          opacity: 0,
          duration: 1,
          ease: 'power3.out',
          scrollTrigger: {
            trigger: e,
            start: 'top 88%'
          }
        })
      });

      gsap.from('.stmt p', {
        opacity: 0,
        y: 40,
        duration: 1,
        scrollTrigger: {
          trigger: '.stmt',
          start: 'top 70%'
        }
      });

      /* genie */

      /* genie */

      var lampTop = $('.lamp .top'),
        lampTopTxt = $$('.lamp .top span'),
        lampP = $('.lamp .mid p'),
        lampRare = $('.lamp .rare'),
        lampBot = $('.lamp .bot');

      var OPEN = 'inset(0px 0px 0px 0px round 0px)';
      var HIDE_FROM_BOTTOM = 'inset(-20% -10% 100% -10%)'; /* reveals top -> down */
      var HIDE_FROM_TOP = 'inset(100% -10% -20% -10%)'; /* reveals bottom -> up */
      var SHOW = 'inset(-20% -10% -20% -10%)';

      /* the lamp starts exactly as the pill button's rectangle, then grows to full screen */
      function pillInset() {
        var G = $('#genie'),
          B = $('.gone');
        //  var w=B.offsetWidth,h=B.offsetHeight,l=B.offsetLeft-w/2,t=B.offsetTop;
        var w = B.offsetWidth,
          h = B.offsetHeight,
          l = B.offsetLeft,
          t = B.offsetTop;
        return 'inset(' + t + 'px ' + (G.offsetWidth - l - w) + 'px ' + (G.offsetHeight - t - h) + 'px ' + l + 'px round ' + (h / 2) + 'px)';
      }

      // gsap.set('.gone',{xPercent:-50});
      gsap.set(lampTop, {
        opacity: 0
      });
      gsap.set(lampTopTxt, {
        opacity: 0
      });
      gsap.set(lampBot, {
        opacity: 0,
        y: 40
      });
      gsap.set(lampP, {
        clipPath: HIDE_FROM_BOTTOM
      });
      gsap.set(lampRare, {
        clipPath: HIDE_FROM_TOP
      });

      var genieTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: '#genie',
          start: 'top top',
          end: function() {
            return '+=' + scrollDistance(400, 240) + '%'
          },
          pin: true,
          scrub: .7,
          anticipatePin: 1
        }
      });

      genieTimeline.to('#gw', {
        y: -80,
        scale: 1.07,
        duration: 5,
        ease: 'none'
      }, 0);

      $$('#gw .gwish').forEach(function(w, i) {

        var direction = i % 4;

        var dx = direction === 0 ? 210 : direction === 1 ? -260 : direction === 2 ? 140 : -175;

        var dy = direction === 0 ? -155 : direction === 1 ? 115 : direction === 2 ? 155 : -105;

        var depth = w.dataset.depth;

        var multiplier = depth === 'far' ? .55 : depth === 'near' ? 1.27 : 1;

        gsap.set(w, {
          x: -dx * .22,
          y: -dy * .22,
          filter: depth === 'far' ? 'blur(3.2px)' : depth === 'near' ? 'blur(0px)' : 'blur(1.1px)'
        });

        genieTimeline.to(w, {

          x: dx * multiplier,
          y: dy * multiplier,

          opacity: depth === 'far' ? .14 : depth === 'near' ? .58 : .39,

          filter: depth === 'far' ? 'blur(5px)' : depth === 'near' ? 'blur(.3px)' : 'blur(2px)',

          duration: 5,
          ease: 'none'

        }, 0);

      });

      genieTimeline

        .to('.gq', {
          y: -120,
          opacity: 0,
          scale: .94,
          duration: 1,
          ease: 'power2.in'
        }, 1)

        /* "The wish gets easy": blur -> sharp, then back to blur */
        .fromTo('.geasy', {
          opacity: 0,
          filter: 'blur(24px)'
        }, {
          opacity: 1,
          filter: 'blur(0px)',
          duration: .9,
          ease: 'power2.out'
        }, 1.5)

        /* pill button pops in */
        .fromTo('.gone', {
          opacity: 0,
          y: 24,
          scale: .85
        }, {
          opacity: 1,
          y: 0,
          scale: 1,
          duration: .5,
          ease: 'power2.out'
        }, 2.6)

        .to('.geasy', {
          opacity: 0,
          filter: 'blur(24px)',
          duration: .5,
          ease: 'power2.in'
        }, 3)

        /* pill -> rounded rectangle -> full screen teal */
        .fromTo('.lamp', {
          autoAlpha: 0
        }, {
          autoAlpha: 1,
          duration: .01
        }, 3.4);

      var lampTween = gsap.fromTo('.lamp', {
        clipPath: function() {
          return pillInset()
        }
      }, {
        clipPath: OPEN,
        duration: 1.2,
        ease: 'power2.inOut'
      });
      genieTimeline.add(lampTween, 3.4);
      ScrollTrigger.addEventListener('refreshInit', function() {
        lampTween.invalidate()
      });

      genieTimeline

        .to('.gone', {
          opacity: 0,
          duration: .3
        }, 3.5)

        /* thin top line appears while still teal */
        .to(lampTop, {
          opacity: 1,
          duration: .4
        }, 4.3)

        /* teal fades to dark */
        .to('.lamp .tint', {
          opacity: 0,
          duration: .7
        }, 4.6)

        /* labels + headline reveal with masks */
        .to(lampTopTxt, {
          opacity: 1,
          duration: .5,
          stagger: .1
        }, 4.9)

        .to(lampP, {
          clipPath: SHOW,
          duration: .6,
          ease: 'power2.out'
        }, 4.9)

        .to(lampRare, {
          clipPath: SHOW,
          duration: .8,
          ease: 'power2.out'
        }, 5.0)

        /* image inside RARE scrolls (pans) while it reveals */
        .fromTo(lampRare, {
          backgroundPosition: '50% 0%'
        }, {
          backgroundPosition: '50% 100%',
          duration: 1.4,
          ease: 'none'
        }, 5.0)

        .to(lampBot, {
          opacity: 1,
          y: 0,
          duration: .6
        }, 5.5);

      /* web wall camera */
      /* web wall: 3D tilted wall. Camera: zoom out -> fly (any direction) -> zoom in + flatten */

      var tiles = $$('.tile'),
        track = $('#wt'),
        ww = $('#work'),
        hudEl = $('.hud'),
        n = tiles.length,
        arr = [],
        cur = -1;

      /* tilt layer is created here, so the HTML stays exactly as it is */
      var tilt = document.createElement('div');
      tilt.className = 'wall-tilt';
      track.parentNode.insertBefore(tilt, track);
      tilt.appendChild(track);

      var cam = {
        x: 0,
        y: 0,
        s: 1,
        rx: 30,
        rz: -12
      };
      var small = matchMedia('(max-width:700px)');

      function geo() {
        return {
          W: ww.clientWidth,
          H: ww.clientHeight,
          tw: track.offsetWidth,
          th: track.offsetHeight
        }
      }

      function ctr(t) {
        return {
          x: t.offsetLeft + t.offsetWidth / 2,
          y: t.offsetTop + t.offsetHeight / 2
        }
      }

      function focusY(g, t) {
        return small.matches ? g.H * .30 + t.offsetHeight / 2 : 90 + (g.H - hudEl.offsetHeight * .85 - 90) / 2
      }

      /* focus camera (tile centered, scale 1) */
      function Fx(k) {
        return geo().W / 2 - ctr(tiles[k]).x
      }

      function Fy(k) {
        return focusY(geo(), tiles[k]) - ctr(tiles[k]).y
      }
      /* overview camera (whole wall visible) */
      function So() {
        var g = geo();
        return Math.min(.94 * g.W / g.tw, .72 * g.H / g.th)
      }

      function Ox() {
        var g = geo();
        return g.W / 2 - So() * g.tw / 2
      }

      function Oy() {
        var g = geo();
        return g.H * .46 - So() * g.th / 2
      }
      /* mid-flight camera (zoomed out, between two tiles) */
      function Sm() {
        return Math.min(.8, Math.max(So() * 1.5, .4))
      }

      function Mx(a, b) {
        var A = ctr(tiles[a]),
          B = ctr(tiles[b]);
        return geo().W / 2 - Sm() * (A.x + B.x) / 2
      }

      function My(a, b) {
        var A = ctr(tiles[a]),
          B = ctr(tiles[b]);
        return geo().H * .46 - Sm() * (A.y + B.y) / 2
      }

      function apply() {
        gsap.set(track, {
          x: cam.x,
          y: cam.y,
          scale: cam.s,
          transformOrigin: '0 0'
        });
        tilt.style.transform = 'rotateX(' + cam.rx + 'deg) rotateZ(' + cam.rz + 'deg)';
        track.style.setProperty('--inv', (1 / cam.s).toFixed(3));
      }

      gsap.set(hudEl, {
        opacity: 0,
        pointerEvents: 'none'
      });

      var wt = gsap.timeline({
        scrollTrigger: {
          trigger: '#work',
          start: 'top top',
          end: function() {
            return '+=' + n * innerHeight * scrollDistance(.9, .65)
          },
          pin: true,
          scrub: .8,
          anticipatePin: 1,
          invalidateOnRefresh: true,

          onUpdate: function(s) {
            var t = wt.time(),
              idx = -1;
            arr.forEach(function(a, i) {
              if (a - .45 <= t) idx = i
            });

            if (idx !== cur) {
              cur = idx;
              tiles.forEach(function(e, i) {
                e.classList.toggle('on', i === idx);

                /* play only the active tile's video */

                var vd = e.querySelector('video');
                if (vd) {
                  if (i === idx) {
                    var pr = vd.play();
                    if (pr && pr.catch) pr.catch(function() {})
                  } else {
                    vd.pause()
                  }
                }
              });

              gsap.to(hudEl, {
                opacity: idx >= 0 ? 1 : 0,
                pointerEvents: idx >= 0 ? 'auto' : 'none',
                duration: .4,
                overwrite: true
              });

              if (idx >= 0) {
                $('#hn').textContent = pad(idx + 1) + ' / ' + pad(n);
                $('#hname').textContent = tiles[idx].dataset.n;
                var tg = $('#htag');
                if (tg) tg.textContent = tiles[idx].dataset.t; /* guarded: #htag may not exist */
                $('#hvisit').href = tiles[idx].href;
                gsap.fromTo('#hname', {
                  yPercent: 25,
                  opacity: 0
                }, {
                  yPercent: 0,
                  opacity: 1,
                  duration: .5
                })
              }
            }

            gsap.set('.bar i', {
              scaleX: s.progress
            })
          }
        }
      });

      /* 1) title fades while the camera dives from the tilted overview into tile 1 and flattens */
      wt.to('#work .intro', {
          opacity: 0,
          scale: 1.12,
          duration: 1,
          ease: 'power1.in'
        }, 0)
        .fromTo('#work .shade', {
          opacity: 1
        }, {
          opacity: .7,
          duration: 1
        }, 0)
        .fromTo(cam, {
          x: Ox,
          y: Oy,
          s: So,
          rx: 30,
          rz: -12
        }, {
          x: function() {
            return Fx(0)
          },
          y: function() {
            return Fy(0)
          },
          s: 1,
          rx: 0,
          rz: 0,
          duration: 1.3,
          ease: 'power2.inOut',
          onUpdate: apply
        }, 0)
        .to({}, {
          duration: .8
        }, 1.3);
      arr[0] = 1.3;

      /* 2) tile -> tile: zoom out + re-tilt, sweep in any direction, zoom in + flatten */
      tiles.forEach(function(t, i) {
        if (!i) return;
        wt.to(cam, {
            x: function() {
              return Mx(i - 1, i)
            },
            y: function() {
              return My(i - 1, i)
            },
            s: Sm,
            rx: 18,
            rz: -6,
            duration: .6,
            ease: 'power2.in',
            onUpdate: apply
          })
          .to(cam, {
            x: function() {
              return Fx(i)
            },
            y: function() {
              return Fy(i)
            },
            s: 1,
            rx: 0,
            rz: 0,
            duration: .6,
            ease: 'power2.out',
            onUpdate: apply
          });
        arr[i] = wt.duration();
        wt.to({}, {
          duration: .8
        });
      });

      apply();
      ScrollTrigger.addEventListener('refresh', apply);

      /* fit every brand title on ONE line inside its column */
      function fitTitles() {
        $$('.scene h3').forEach(function(h) {
          h.style.fontSize = '';
          var avail = h.parentNode.clientWidth;
          if (!avail) return;
          var w = h.scrollWidth;
          if (w > avail) h.style.fontSize = (parseFloat(getComputedStyle(h).fontSize) * avail / w * .97) + 'px';
        });
      }
      fitTitles();
      (document.fonts && document.fonts.ready ? document.fonts.ready : Promise.resolve()).then(function() {
        fitTitles();
        ScrollTrigger.refresh()
      });
      var ft;
      addEventListener('resize', function() {
        clearTimeout(ft);
        ft = setTimeout(function() {
          fitTitles();
          ScrollTrigger.refresh()
        }, 200)
      });

      /* brand portals */

      var scenes = $$('.scene');
      gsap.set(scenes, {
        clipPath: 'circle(0% at 50% 50%)'
      });

      var bt = gsap.timeline({
        scrollTrigger: {
          trigger: '#brands',
          start: 'top top',
          end: function() {
            return '+=' + bt.duration() * innerHeight * scrollDistance(.5, .35)
          },
          pin: true,
          scrub: .8,
          anticipatePin: 1,
          invalidateOnRefresh: true
        }
      });

      bt.to('#brands .intro', {
        opacity: 0,
        scale: .9,
        duration: .8
      }, 0);

      scenes.forEach(function(s, i) {
        var tr = $('.tr', s),
          pan = 1 + tr.children.length * .5,
          chars = $$('.tc', s);

        function dist() {
          var left = $('.brand-gallery', s).getBoundingClientRect().left;
          return Math.max(0, tr.scrollWidth - (innerWidth - left - 30));
        }
        bt.to(s, {
            clipPath: 'circle(150% at 50% 50%)',
            duration: 1,
            ease: 'power2.inOut'
          }, i ? '>' : .3)
          .addLabel('sc' + i, '<.4')
          .fromTo($('.in', s), {
            y: 60,
            opacity: 0
          }, {
            y: 0,
            opacity: 1,
            duration: .8
          }, 'sc' + i)
          /* title letters: rise + fade in (placed inside the chain, pan position is explicit) */
          .fromTo(chars, {
            yPercent: 90,
            opacity: 0
          }, {
            yPercent: 0,
            opacity: 1,
            duration: .6,
            stagger: .035,
            ease: 'power3.out'
          }, 'sc' + i + '+=.15')
                    .to(tr, {
            x: function() {
              return -dist()
            },
            duration: pan,
            ease: 'none'
          }, 'sc' + i + '+=.8')
          .call(function() {}, null, '<')
          .fromTo($('.gt', s), {
            xPercent: 0
          }, {
            xPercent: -22,
            duration: pan + 1,
            ease: 'none'
          }, '<-.6');
                  /* save this scene's pan time range for the arrows */
        (function(sc, trEl, cnt) {
          var startT = bt.labels['sc' + i] + .8;
          sc.__pan = { start: startT, end: startT + pan, count: cnt };
        })(s, tr, tr.children.length);
      });

            /* arrows: slide image-by-image inside the current scene (smooth + slow) */
      var panTweens = {};
      scenes.forEach(function(s, i) {
        panTweens[i] = s.__pan;
      });

      var slideBusy = false;

      function smoothScrollTo(y, ms) {
        var start = window.scrollY, dist = y - start, t0 = null;
        if (matchMedia('(prefers-reduced-motion: reduce)').matches || Math.abs(dist) < 2) {
          window.scrollTo(0, y);
          return Promise.resolve();
        }
        return new Promise(function(res) {
          function ease(t) { return t < .5 ? 2 * t * t : 1 - Math.pow(-2 * t + 2, 2) / 2 }
          function step(ts) {
            if (t0 === null) t0 = ts;
            var p = Math.min(1, (ts - t0) / ms);
            window.scrollTo(0, start + dist * ease(p));
            if (p < 1) requestAnimationFrame(step); else res();
          }
          requestAnimationFrame(step);
        });
      }

      $$('.brand-slide-controls button').forEach(function(button) {
        button.addEventListener('click', function() {
          if (slideBusy) return;
          var scene = button.closest('.scene');
          var idx = Number(scene.dataset.brandIndex);
          var dir = Number(button.dataset.brandStep);
          var trigger = bt.scrollTrigger;
          var info = scene.__pan;
          if (!trigger || !info) return;

          var count = info.count;                 /* images in this scene */
          var tl = bt.duration();
          var totalScroll = trigger.end - trigger.start;
          function toScroll(time) { return trigger.start + (time / tl) * totalScroll }

          var a = toScroll(info.start), b = toScroll(info.end);
          var cur = window.scrollY;

          /* current slide position inside this scene's pan range */
          var slide = count > 1 ? Math.round((cur - a) / (b - a) * (count - 1)) : 0;
          slide = Math.max(0, Math.min(count - 1, slide));
          var next = slide + dir;

          var dest;
          if (next < 0) {
            /* previous scene, last image */
            var pi = (idx - 1 + scenes.length) % scenes.length, pinfo = scenes[pi].__pan;
            dest = toScroll(pinfo.end);
          } else if (next > count - 1) {
            /* next scene, first image */
            var ni = (idx + 1) % scenes.length, ninfo = scenes[ni].__pan;
            dest = toScroll(ninfo.start);
          } else {
            dest = a + (b - a) * (next / (count - 1));
          }

          slideBusy = true;
          smoothScrollTo(dest, 850).then(function() { slideBusy = false });
        });
      });

      /* shift lens */

      var steps = $$('.st'),
        zone = $('.zone'),
        lens = $('.lens'),
        sh = $('.sh'),
        fill = $('.stp .fill'),
        st = {
          p: 0,
          o: 0
        },
        last = -1;

                  var vert = matchMedia('(max-width:991px)');

      function lay() {
        var f = st.p * (steps.length - 1),
          a = Math.floor(f),
          b = Math.min(steps.length - 1, a + 1),
          m = f - a;

        if (vert.matches) {
          /* mobile + tab: vertical zig-zag timeline, no lens */
          var sp = $('#sp');
          var ya = steps[a].offsetTop + 19,
            yb = steps[b].offsetTop + 19,
            y = ya + (yb - ya) * m;
          fill.style.height = y + 'px';
          fill.style.transform = 'translateX(-50%)';
          var max = sp.scrollHeight - sp.clientHeight;
          sp.scrollTop = max > 0 ? Math.max(0, Math.min(max, y - sp.clientHeight * .45)) : 0;
        } else {
          /* desktop + 992-1200px: original lens animation, clear any mobile leftovers */
          fill.style.height = '';
          $('#sp').scrollTop = 0;

          var z = zone.getBoundingClientRect(),
            tr = $('.stp').getBoundingClientRect();

          var xa = steps[a].getBoundingClientRect().left + 5,
            xb = steps[b].getBoundingClientRect().left + 5,
            xa2 = xa + (xb - xa) * m,
            cx = xa2 - z.left,
            cy = z.height / 2,
            D = Math.min(z.height * .9, 340),
            R = Math.hypot(z.width, z.height),
            r = D / 2 + st.o * (R - D / 2);

          gsap.set(lens, {
            x: cx - D / 2,
            y: cy - D / 2,
            width: D,
            height: D,
            opacity: Math.max(0, 1 - st.o * 3)
          });
          sh.style.clipPath = 'circle(' + r + 'px at ' + cx + 'px ' + cy + 'px)';
          gsap.set(fill, {
            scaleX: Math.max(0, Math.min(1, (xa2 - tr.left) / tr.width))
          });
        }

        var idx = Math.min(steps.length - 1, Math.round(f));
        if (idx !== last) {
          last = idx;
          steps.forEach(function(s, k) {
            s.classList.toggle('on', k === idx);
            s.classList.toggle('dn', k < idx)
          });
          $('#sn').textContent = pad(idx + 1)
        }
      }

      /* switching between mobile and desktop widths: re-measure and redraw */
      vert.addEventListener('change', function() {
        ScrollTrigger.refresh();
        lay();
      });

      lay();
      ScrollTrigger.addEventListener('refresh', lay);

            gsap.timeline({
          scrollTrigger: {
            trigger: '#how',
            start: 'top top',
            end: function() {
              return '+=' + (steps.length * scrollDistance(.8, .5) + scrollDistance(1.2, .8)) * innerHeight
            },
            pin: true,
            pinSpacing: true,
            pinReparent: false,
            scrub: .6,
            anticipatePin: 1,
            invalidateOnRefresh: true,
            onLeave: function() {
              /* pin release ayyaka mobile leftovers clear */
              $('#sp').scrollTop = 0;
            },
            onEnterBack: function() {
              lay();
            }
          }
        })

        .to({}, {
          duration: .4
        }).to(st, {
          p: 1,
          duration: steps.length - 1,
          ease: 'none',
          onUpdate: lay
        }).to(st, {
          o: 1,
          duration: 1.2,
          ease: 'power2.in',
          onUpdate: lay
        });

      ScrollTrigger.refresh()
    }

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot, {
      once: true
    });
    else boot();

    /* Refresh measurements after media/fonts settle, without blocking content. */
    function refreshLayout() {
      if (window.ScrollTrigger) ScrollTrigger.refresh()
    }
    addEventListener('load', refreshLayout, {
      once: true
    });
    addEventListener('pageshow', function(e) {
      if (e.persisted) refreshLayout()
    });
    if (document.fonts) document.fonts.ready.then(refreshLayout);

  })();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>

<!-- ===== ADDED: logo zoom, physics chips, clients logos, news, footer motion ===== -->
<script>
  (function() {

    var $ = function(s, r) {
        return (r || document).querySelector(s)
      },
      $$ = function(s, r) {
        return [].slice.call((r || document).querySelectorAll(s))
      };

    var reduce = matchMedia('(prefers-reduced-motion:reduce)').matches;

    /* clients: live site shows logo images instead of text */

    /* =========================================================
       CLIENT LOGOS - LOCAL assets/img folder
       Existing marquee animation remains exactly the same
    ========================================================= */

        var LOGOS = [
      { name: 'Animals', src: 'assets_1/images/movies/Animals.webp', url: 'latest-movies.html' },
      { name: 'Pushpa 2', src: 'assets_1/images/movies/Pushpa-2-theRule.png', url: 'latest-movies.html' },
      { name: 'Devara', src: 'assets_1/images/movies/devara-1-movie.webp', url: 'latest-movies.html' },
      { name: 'Kalki 2898 AD', src: 'assets_1/images/movies/kalki-poster.png', url: 'latest-movies.html' },
      { name: 'Game Changer', src: 'assets_1/images/movies/game-changer-poster.png', url: 'latest-movies.html' },
      { name: 'Virupaksha', src: 'assets_1/images/movies/virupaksha-poster.png', url: 'latest-movies.html' },
      { name: 'Avengers Assemble', src: 'assets_1/images/movies/Avengers-assemble.webp', url: 'latest-movies.html' },
      { name: 'Avatar The Way of Water', src: 'assets_1/images/movies/Avatar-The-Way-of-Water-2022.webp', url: 'latest-movies.html' },
      { name: 'Mission Impossible', src: 'assets_1/images/movies/Mission-impossible-movie.jpg', url: 'latest-movies.html' }
    ];

    var mt = $('#mt');

    if (mt) {
      mt.style.setProperty('--client-logo-count', LOGOS.length);

      var one = LOGOS.map(function(logo) {

        var img = '<img src="' + logo.src + '" ' +
          'alt="' + logo.name + '" ' +
          'loading="lazy" ' +
          'onerror="this.closest(\'span\').remove()">';

        /* link undi ante <a> tho wrap, lekapothe image matrame */
        var inner = (logo.url && logo.url !== '#') ?
          '<a href="' + logo.url + '" target="_blank" rel="noopener noreferrer" aria-label="' + logo.name + '">' + img + '</a>' :
          img;

        return '<span>' + inner + '</span>';

      }).join('');

      /* duplicate logos = seamless infinite marquee */
      mt.innerHTML = one + one;
    }

    /* chips */

    var CHIPS = ['Movie Discovery', 'New Releases', 'Trending Titles', 'Popular Trailers', 'Local Showtimes', 'Easy Booking', 'Theatre Listings', 'Telugu Cinema', 'Family Favourites', 'Action & Adventure', 'Movie Night', 'Sairam Movie Hub'];

    var TONE = [0, 1, 1, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0],
      box = $('#pxr'),
      chips = [];

    /* mobile (700px & below): only 8 chips, 4 black + 4 blue (alternating); other screens keep all 14 */
    var MOBILE_CHIPS = [0, 1, 3, 2, 5, 4, 8, 6];
    var chipList = matchMedia('(max-width:700px)').matches ? MOBILE_CHIPS : CHIPS.map(function(c, i) {
      return i
    });

    if (box) chipList.forEach(function(i) {
      var d = document.createElement('div');
      d.className = 'px-chip ' + (TONE[i] ? 't' : 'k');
      d.textContent = CHIPS[i];
      box.appendChild(d);
      chips.push(d)
    });

    /* gravity: chips fall into the box when it scrolls into view and pile on the floor; drag them with the mouse */

    function physics() {

      var M = window.Matter,
        Engine = M.Engine,
        Bodies = M.Bodies,
        Composite = M.Composite;

      var engine = Engine.create();
      engine.gravity.y = 1.2;

      var walls = [];

      function mkWalls() {
        var w = box.clientWidth,
          h = box.clientHeight;
        if (walls.length) Composite.remove(engine.world, walls);

        walls = [Bodies.rectangle(w / 2, h + 30, w + 800, 60, {
          isStatic: true
        }), Bodies.rectangle(-30, -h, 60, h * 4, {
          isStatic: true
        }), Bodies.rectangle(w + 30, -h, 60, h * 4, {
          isStatic: true
        })];

        Composite.add(engine.world, walls)
      }

      mkWalls();

      var items = [],
        spawned = false,
        running = false,
        last = 0;

      function spawn() {
        spawned = true;
        var w = box.clientWidth;

        chips.forEach(function(el, i) {
          var cw = el.offsetWidth,
            ch = el.offsetHeight;

          var b = Bodies.rectangle(cw / 2 + Math.random() * (w - cw), -ch * (1 + i * 1.3), cw, ch, {
            chamfer: {
              radius: ch / 2
            },
            restitution: .25,
            friction: .5,
            frictionAir: .012,
            density: .002,
            angle: (Math.random() - .5) * 1.4
          });

          Composite.add(engine.world, b);
          items.push({
            el: el,
            b: b,
            cw: cw,
            ch: ch
          })
        })
      }

      function tick(t) {
        if (!running) return;

        var dt = Math.min(32, (t - last) || 16.7);
        last = t;
        Engine.update(engine, dt);

        items.forEach(function(o) {
          var p = o.b.position;
          o.el.style.transform = 'translate(' + (p.x - o.cw / 2) + 'px,' + (p.y - o.ch / 2) + 'px) rotate(' + o.b.angle + 'rad)';
          o.el.style.opacity = 1
        });

        requestAnimationFrame(tick)
      }

      new IntersectionObserver(function(es) {
        es.forEach(function(e) {

          if (e.isIntersecting) {
            if (!spawned) spawn();
            if (!running) {
              running = true;
              last = performance.now();
              requestAnimationFrame(tick)
            }
          } else {
            running = false
          }
        })
      }, {
        threshold: .2
      }).observe(box);

      /* mouse drag on desktop (wheel listeners removed so page scrolling is never blocked) */

      if (!matchMedia('(pointer:coarse)').matches) {

        var mouse = M.Mouse.create(box);

        ['wheel', 'mousewheel', 'DOMMouseScroll'].forEach(function(n) {
          mouse.element.removeEventListener(n, mouse.mousewheel)
        });

        Composite.add(engine.world, M.MouseConstraint.create(engine, {
          mouse: mouse,
          constraint: {
            stiffness: .18,
            render: {
              visible: false
            }
          }
        }))
      }

      var rt;
      addEventListener('resize', function() {
        clearTimeout(rt);
        rt = setTimeout(mkWalls, 200)
      })
    }

    /* split text into words (needed for the scroll-fill + headline reveal) */

    function split(el, cls) {
      el.innerHTML = el.textContent.trim().split(/\s+/).map(function(w) {
        return '<span class="' + cls + '">' + w + '</span>'
      }).join(' ')
    }

    $$('.px-t').forEach(function(e) {
      split(e, 'px-w')
    });

    $$('.px-h2').forEach(function(e) {
      split(e, 'px-hw')
    });

    function start() {

      if (box) {
        if (window.Matter && !reduce) physics();
        else box.classList.add('static')
      }

      if (!window.gsap || !window.ScrollTrigger || reduce) return;

      gsap.registerPlugin(ScrollTrigger);

      /* 1. feel section: images rise in, words fill in as you scroll, images drift at different speeds, button appears */

      gsap.set('.px-w', {
        opacity: .25
      });

      gsap.timeline({
          defaults: {
            ease: 'none'
          },
          scrollTrigger: {
            trigger: '.px-feel',
            start: 'top top',
            end: 'bottom bottom',
            scrub: .7
          }
        })

        .fromTo('.px-l', {
          yPercent: 16,
          opacity: 0
        }, {
          yPercent: 0,
          opacity: 1,
          duration: .5,
          ease: 'power2.out'
        }, 0)

        .fromTo('.px-s', {
          yPercent: 45,
          opacity: 0
        }, {
          yPercent: 0,
          opacity: 1,
          duration: .5,
          ease: 'power2.out'
        }, .08)

        .to('.px-w', {
          opacity: 1,
          stagger: .06,
          duration: .12
        }, .3)

        .to('.px-l', {
          yPercent: -6,
          duration: 1.7
        }, .5)

        .to('.px-s', {
          yPercent: -18,
          duration: 1.7
        }, .5)

        .fromTo('.px-btn', {
          opacity: 0,
          y: 30
        }, {
          opacity: 1,
          y: 0,
          duration: .3
        }, 1.5);

      /* 2. logo zoom: the logo scales up until it fills the screen, then fades to the white section */

      gsap.timeline({
          defaults: {
            ease: 'none'
          },
          scrollTrigger: {
            trigger: '.px-zoom',
            start: 'top top',
            end: 'bottom bottom',
            scrub: .6
          }
        })

        .fromTo('.px-zlogo', {
          scale: 1
        }, {
          scale: 40,
          duration: 1,
          ease: 'power2.in'
        }, 0)

        /* tagline: zoom start avvagane slow ga fade + konchem paiki jarigi disappear */
        .to('.px-ztext', {
          opacity: 0,
          y: -18,
          filter: 'blur(4px)',
          duration: .4,
          ease: 'power1.out'
        }, 0)

        .to('.px-zfade', {
          opacity: 1,
          duration: .14
        }, .86);

      /* 3. help section */

      var hs = {
        trigger: '.px-help',
        start: 'top 72%'
      };

      gsap.from('.px-hw', {
        opacity: 0,
        y: 44,
        duration: .9,
        stagger: .05,
        ease: 'power3.out',
        scrollTrigger: hs
      });

      gsap.from('.px-p', {
        opacity: 0,
        y: 30,
        duration: .9,
        delay: .3,
        ease: 'power3.out',
        scrollTrigger: hs
      });

      /* 4. clients */

      gsap.from('.cl small', {
        opacity: 0,
        y: 24,
        duration: .8,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: '.cl',
          start: 'top 85%'
        }
      });

      gsap.from('.mq', {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: '.cl',
          start: 'top 80%'
        }
      });

      /* 5. contact form + details */

      gsap.from('.cta input,.cta textarea,.cta .go', {
        opacity: 0,
        y: 30,
        duration: .7,
        stagger: .1,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: '#f',
          start: 'top 85%'
        }
      });

      gsap.from('.cta .loc > div', {
        opacity: 0,
        y: 30,
        duration: .8,
        stagger: .15,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: '.cta .loc',
          start: 'top 95%'
        }
      });

      /* 6. news widget + footer */

      gsap.from('.px-frame', {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: '.px-news',
          start: 'top 90%'
        }
      });

      gsap.from('.fg > div', {
        opacity: 0,
        y: 40,
        duration: .8,
        stagger: .12,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: '.fg',
          start: 'top 92%'
        }
      });

      gsap.from('.wm', {
        yPercent: 40,
        opacity: 0,
        duration: 1.2,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: '.wm',
          start: 'top 100%'
        }
      });

      gsap.from('.cp', {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
          trigger: '.cp',
          start: 'top 100%'
        }
      });

      ScrollTrigger.refresh()
    }

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', start, {
      once: true
    });
    else start();

  })();
</script>

<!-- ===== ADDED: whatsapp "Chat with us" open/hide + back-to-top progress ring ===== -->
<script>
  (function() {

    var wa = document.querySelector('.wa-widget'),
      top = document.getElementById('btnBackToTop');

    if (wa) {

      wa.classList.add('js');

      if (matchMedia('(prefers-reduced-motion:reduce)').matches) {
        wa.classList.add('open')
      } else {

        var hover = false,
          open = function() {
            wa.classList.add('open')
          },
          shut = function() {
            wa.classList.remove('open')
          };

        var cycle = function() {
          open();
          setTimeout(function() {
            if (!hover) shut()
          }, 6000)
        };

        setTimeout(cycle, 2000);
        setInterval(cycle, 16000);

        wa.addEventListener('mouseenter', function() {
          hover = true;
          open()
        });

        wa.addEventListener('mouseleave', function() {
          hover = false;
          shut()
        });

        wa.addEventListener('focus', open);
        wa.addEventListener('blur', shut)
      }

    }

    if (top) {

      var prog = function() {
        var h = document.documentElement.scrollHeight - innerHeight,
          p = h > 0 ? Math.min(100, Math.max(0, scrollY / h * 100)) : 0;
        top.style.setProperty('--p', p + '%')
      };

      addEventListener('scroll', prog, {
        passive: true
      });
      addEventListener('resize', prog);
      prog()
    }

  })();
</script>




<script>
  (function() {
    var o = document.querySelector('.deco .orb'),
      p = document.querySelector('.deco .pic');
    if (!o || !p || matchMedia('(prefers-reduced-motion:reduce)').matches || matchMedia('(pointer:coarse)').matches) return;
    addEventListener('mousemove', function(e) {
      var x = (e.clientX / innerWidth - .5),
        y = (e.clientY / innerHeight - .5);
      p.style.translate = (x * -40) + 'px ' + (y * -40) + 'px';
      o.style.translate = (x * 30) + 'px ' + (y * 30) + 'px';
    }, {
      passive: true
    });
  })();
</script>



<script>
  (function() {
    var wrap = document.getElementById('work-needle');
    if (!wrap || matchMedia('(prefers-reduced-motion:reduce)').matches) return;
    var stage = wrap.querySelector('.nw-stage'),
      title = wrap.querySelector('.nw-title');
    var chars = [],
      mChar = null;

    /* split into characters */
    [].slice.call(title.querySelectorAll('.nw-line')).forEach(function(line, li) {
      var t = line.textContent;
      line.textContent = '';
      t.split('').forEach(function(c) {
        var s = document.createElement('span');
        s.className = 'nw-ch' + (c === ' ' ? ' nw-sp' : '');
        s.textContent = c === ' ' ? '\u00A0' : c;
        line.appendChild(s);
        if (c !== ' ') chars.push(s);
        if (li === 1 && c === 'M' && !mChar) mChar = s;
      });
    });

    /* zoom goes into the "M" of "Moves" */
    function origin() {
      var prev = title.style.transform;
      title.style.transform = 'none';
      var t = title.getBoundingClientRect(),
        m = mChar.getBoundingClientRect();
      title.style.transformOrigin = (m.left - t.left + m.width / 2) + 'px ' + (m.top - t.top + m.height / 2) + 'px';
      title.style.transform = prev;
    }

    var clamp = function(v, a, b) {
      return Math.min(b === undefined ? 1 : b, Math.max(a === undefined ? 0 : a, v))
    };
    var lerp = function(a, b, t) {
      return a + (b - a) * t
    };
    var mix = function(c1, c2, t) {
      return 'rgb(' + c1.map(function(v, i) {
        return Math.round(lerp(v, c2[i], t))
      }).join(',') + ')'
    };

    var GREY = [203, 200, 197],
      INK = [20, 20, 20];
    var BG = [
      [255, 255, 255],
      [150, 150, 150],
      [60, 60, 60],
      [17, 17, 17]
    ]; /* white > grey > dark (#111) */
    var FILL_END = 0.42,
      total = chars.length;

    function update() {
      var r = wrap.getBoundingClientRect();
      var p = clamp(-r.top / (wrap.offsetHeight - innerHeight));

      /* phase 1: grey -> black, letter by letter */
      var f = clamp(p / FILL_END) * (total + 6);
      for (var i = 0; i < total; i++) chars[i].style.color = mix(GREY, INK, clamp(f - i, 0, 1));

      /* phase 2: zoom in + bg grey -> dark */
      var z = clamp((p - FILL_END) / (1 - FILL_END));
      title.style.transform = 'scale(' + Math.pow(22, z) + ')';
      var seg = z * (BG.length - 1),
        k = Math.min(Math.floor(seg), BG.length - 2);
      stage.style.background = mix(BG[k], BG[k + 1], seg - k);
      title.style.opacity = 1 - clamp((z - 0.82) / 0.18);
    }

    var tick = false;
    addEventListener('scroll', function() {
      if (!tick) {
        tick = true;
        requestAnimationFrame(function() {
          update();
          tick = false
        })
      }
    }, {
      passive: true
    });
    addEventListener('resize', function() {
      origin();
      update()
    });
    (document.fonts ? document.fonts.ready : Promise.resolve()).then(function() {
      origin();
      update()
    });
    addEventListener('load', function() {
      origin();
      update();
      if (window.ScrollTrigger) ScrollTrigger.refresh()
    });
    origin();
    update();
  })();
</script>




<script>
  (function() {
    var A = '',
      U = 'index.php';
    /* [tag, title, description, date, link slug, image url (paste here)] */
    var NEWS = [
      ['NOW SHOWING', 'Find your next movie', 'Browse popular releases and plan a great cinema night.', '', '', 'assets_1/images/movies/Animals.webp'],
      ['TELUGU CINEMA', 'Trending Telugu hits', 'Explore Telugu favourites and the latest movie updates.', '', '', 'assets_1/images/movies/Pushpa-2-theRule.png'],
      ['TRAILERS', 'Watch before you book', 'Get a preview of the stories waiting for you on the big screen.', '', '', 'assets_1/images/movies/kalki-poster.png'],
      ['ACTION', 'Big screen adventures', 'Discover action packed movies and larger than life stories.', '', '', 'assets_1/images/movies/Avengers-assemble.webp'],
      ['COMING SOON', 'Upcoming releases', 'Keep track of movies you are looking forward to seeing.', '', '', 'assets_1/images/movies/Ramayana-part-1.webp'],
      ['BOOKING', 'Plan your movie night', 'Choose a movie, check showtimes, and book your tickets.', '', '', 'assets_1/images/movies/Movie-theatre-bg.png']
    ];
    var tr = document.getElementById('nwsTr'),
      vp = document.getElementById('nwsVp'),
      dt = document.getElementById('nwsD');
    if (!tr) return;
    var e = function(s) {
      return String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;')
    };
    tr.innerHTML = NEWS.map(function(n) {
      return '<a class="nws-c" href="' + U + n[4] + '/" target="_blank" rel="noopener">' + (n[5] ? '<img src="' + e(n[5]) + '" alt="" loading="lazy">' : '') + '<div class="nws-t">' + (n[0] ? '<small>' + e(n[0]) + '</small>' : '') + '<h4>' + e(n[1]) + '</h4><p>' + e(n[2]) + '</p><span><i class="fa-regular fa-user"></i>' + A + '<b>ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â·</b><i class="fa-regular fa-calendar"></i>' + n[3] + '</span></div></a>'
    }).join('');
    dt.innerHTML = NEWS.map(function() {
      return '<i></i>'
    }).join('');
    var cards = [].slice.call(tr.children),
      dots = [].slice.call(dt.children);

    function step() {
      return cards[0].offsetWidth + 16
    }

    function cur() {
      return Math.min(cards.length - 1, Math.round(vp.scrollLeft / step()))
    }

    function mark() {
      var c = cur();
      dots.forEach(function(d, i) {
        d.classList.toggle('on', i === c)
      })
    }
    vp.addEventListener('scroll', mark, {
      passive: true
    });
    mark();
    document.getElementById('nwsN').onclick = function() {
      vp.scrollBy({
        left: step(),
        behavior: 'smooth'
      })
    };
    document.getElementById('nwsP').onclick = function() {
      vp.scrollBy({
        left: -step(),
        behavior: 'smooth'
      })
    };
    dots.forEach(function(d, i) {
      d.onclick = function() {
        vp.scrollTo({
          left: i * step(),
          behavior: 'smooth'
        })
      }
    });
    /* auto-scroll: one card every 3.5s, loops back to start, pauses on hover/touch/offscreen/user action */
    (function() {
      if (matchMedia('(prefers-reduced-motion:reduce)').matches) return;
      var visible = false,
        hovering = false,
        lastUser = 0;
      var touch = function() {
        lastUser = Date.now()
      };

      function atEnd() {
        return vp.scrollLeft + vp.clientWidth >= vp.scrollWidth - 4
      }

      function auto() {
        if (!visible || hovering || Date.now() - lastUser < 6000) return;
        if (atEnd()) vp.scrollTo({
          left: 0,
          behavior: 'smooth'
        });
        else vp.scrollBy({
          left: step(),
          behavior: 'smooth'
        });
      }
      setInterval(auto, 3500);
      vp.addEventListener('mouseenter', function() {
        hovering = true
      });
      vp.addEventListener('mouseleave', function() {
        hovering = false
      });
      ['touchstart', 'pointerdown', 'wheel'].forEach(function(ev) {
        vp.addEventListener(ev, touch, {
          passive: true
        })
      });
      document.getElementById('nwsN').addEventListener('click', touch);
      document.getElementById('nwsP').addEventListener('click', touch);
      dots.forEach(function(d) {
        d.addEventListener('click', touch)
      });
      new IntersectionObserver(function(es) {
        visible = es[0].isIntersecting
      }, {
        threshold: .3
      }).observe(vp);
    })();
  })();
</script>




<script>
  (function() {
    var h = document.querySelector('header'),
      t = document.getElementById('menuToggle'),
      nav = document.getElementById('siteNav');
    if (!h || !t || !nav) return;

    function set(open) {
      h.classList.toggle('open', open);
      t.setAttribute('aria-expanded', open);
      t.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    }
    t.addEventListener('click', function(e) {
      e.stopPropagation();
      set(!h.classList.contains('open'))
    });
    nav.addEventListener('click', function(e) {
      if (e.target.closest('a')) set(false)
    });
    document.addEventListener('click', function(e) {
      if (!h.contains(e.target)) set(false)
    });
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') set(false)
    });
    addEventListener('resize', function() {
      if (innerWidth > 1000) set(false)
    });
  })();
</script>





<script>
  (function() {
    var dd = document.querySelector('.nav-dd'),
      h = document.querySelector('header');
    if (!dd || !h) return;
    var trg = dd.querySelector('.dd-trigger');
    var hoverable = function() {
      return matchMedia('(hover:hover) and (pointer:fine)').matches && innerWidth > 1000
    };

    function set(o) {
      dd.classList.toggle('open', o);
      trg.setAttribute('aria-expanded', o)
    }

    /* touch / mobile: tap toggles (desktop mouse uses CSS hover) */
    trg.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation(); /* stops the mobile menu from closing */
      if (hoverable()) return;
      set(!dd.classList.contains('open'));
    });
    document.addEventListener('click', function(e) {
      if (!dd.contains(e.target)) set(false)
    });
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') set(false)
    });
    addEventListener('resize', function() {
      set(false)
    });
    /* mobile menu closed -> dropdown also resets */
    new MutationObserver(function() {
      if (!h.classList.contains('open')) set(false)
    }).observe(h, {
      attributes: true,
      attributeFilter: ['class']
    });
  })();
</script>





<script>
  (function() {
    var h = document.querySelector('.ww .intro h2');
    if (!h || !document.createElement('canvas').getContext) return;

    function build() {
      var cs = getComputedStyle(h),
        fs = parseFloat(cs.fontSize),
        W = h.offsetWidth,
        H = h.offsetHeight;
      if (!W || !H) return;
      var padX = .1 * fs,
        padY = .25 * fs,
        dpr = Math.min(2, devicePixelRatio || 1);
      var cw = W + padX * 2,
        ch = H + padY * 2,
        c = document.createElement('canvas');
      c.width = Math.round(cw * dpr);
      c.height = Math.round(ch * dpr);
      var x = c.getContext('2d');
      x.scale(dpr, dpr);
      x.font = cs.fontWeight + ' ' + fs + 'px ' + cs.fontFamily;
      x.fillStyle = '#000';
      x.textAlign = 'center';
      x.textBaseline = 'alphabetic';
      var t = h.textContent.trim();
      if (cs.textTransform === 'uppercase') t = t.toUpperCase();
      var m = x.measureText(t),
        asc = m.fontBoundingBoxAscent || fs * .9,
        desc = m.fontBoundingBoxDescent || fs * .2;
      var lh = parseFloat(cs.lineHeight) || H;
      x.fillText(t, cw / 2, padY + (lh - (asc + desc)) / 2 + asc); /* same baseline the browser uses for the real text */
      h.style.setProperty('--glass-mask', 'url(' + c.toDataURL() + ')');
      h.classList.add('glass-on');
    }

    var cs0 = getComputedStyle(h);
    var fontReady = document.fonts && document.fonts.load ? document.fonts.load(cs0.fontWeight + ' 100px ' + cs0.fontFamily) : Promise.resolve();
    fontReady.then(function() {
      return document.fonts ? document.fonts.ready : 0
    }).then(build);

    var rt;
    addEventListener('resize', function() {
      clearTimeout(rt);
      rt = setTimeout(build, 200)
    });
  })();
</script>



<script>
  (function() {
    var btn = document.getElementById('abMore'),
      box = document.getElementById('abExtra');
    if (!btn || !box) return;

    /* Know More / Know Less */
    btn.addEventListener('click', function() {
      var open = box.classList.toggle('open');
      btn.setAttribute('aria-expanded', open);
      btn.querySelector('.ab-lbl').textContent = open ? 'Know Less' : 'Know More';
      /* height maarindi kabatti pin positions malli measure */
      setTimeout(function() {
        if (window.ScrollTrigger) ScrollTrigger.refresh()
      }, 650);
    });

    /* image fold animation (scroll based) */
    function init() {
      if (!window.gsap || !window.ScrollTrigger || matchMedia('(prefers-reduced-motion:reduce)').matches) return;
      gsap.registerPlugin(ScrollTrigger);

      /* section loki vachetappudu: image paper laga unfold */
      gsap.fromTo('.ab-fold', {
        rotateX: 75,
        opacity: 0
      }, {
        rotateX: 0,
        opacity: 1,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: '.ab',
          start: 'top 90%',
          end: 'top 35%',
          scrub: .6
        }
      });

      /* next section ki veltunnappudu: image fold ayyi close avtundi */
      gsap.fromTo('.ab-fold', {
        rotateX: 0,
        opacity: 1
      }, {
        rotateX: -90,
        opacity: 0,
        ease: 'power2.in',
        immediateRender: false,
        scrollTrigger: {
          trigger: '.ab',
          start: 'bottom 85%',
          end: 'bottom 15%',
          scrub: .6
        }
      });
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init, {
      once: true
    });
    else init();
    addEventListener('load', function() {
      if (window.ScrollTrigger) ScrollTrigger.refresh()
    });
  })();
</script>





<script>
(function(){
  var sec=document.getElementById('bhavi-packages');
  if(!sec)return;
  sec.classList.add('bp-js');

  /* reveal when visible */
  if('IntersectionObserver' in window){
    new IntersectionObserver(function(es,ob){
      es.forEach(function(e){
        if(e.isIntersecting){sec.classList.add('is-in');ob.disconnect()}
      })
    },{threshold:.12}).observe(sec);
  }else{sec.classList.add('is-in')}

  /* mouse spotlight on cards (desktop) */
  if(matchMedia('(hover:hover)').matches){
    sec.querySelectorAll('.bhavi-plan').forEach(function(c){
      c.addEventListener('pointermove',function(e){
        var r=c.getBoundingClientRect();
        c.style.setProperty('--mx',(e.clientX-r.left)+'px');
        c.style.setProperty('--my',(e.clientY-r.top)+'px');
      });
    });
  }
})();
</script>

</body>

</html>
