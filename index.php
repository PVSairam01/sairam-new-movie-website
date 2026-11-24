<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sairam Movie Hub | Movies, Trailers &amp; Tickets</title>
  <meta name="description" content="Discover Telugu movies, explore trailers, and book your next movie experience with Sairam Movie Hub.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:wght@400;500;700&family=Instrument+Sans:wght@500;600&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/new_style.css?v=<?= filemtime(__DIR__ . '/assets/css/new_style.css') ?>">
  <style>
    .scene .in > .brand-gallery { min-width:0; overflow:visible; }
    @media(max-width:700px) {
      html.hero-at-top .hero > .wrap,
      html.hero-at-top .hero .h { opacity:1 !important; visibility:visible !important; }
      html.hero-at-top .hero > .wrap { transform:none !important; }
    }
  </style>
  <script>
    (function(){
      var root=document.documentElement;
      function syncHeroStart(){root.classList.toggle('hero-at-top',window.scrollY<=1);}
      syncHeroStart();
      addEventListener('scroll',syncHeroStart,{passive:true});
      addEventListener('pageshow',syncHeroStart);
    })();
  </script>
</head>
<body>
<?php include 'header.php'; ?>

<!-- ===== index_first_section (hero) : replaces the old <section class="hero"> ... </section> in index.php ===== -->
<section class="index_first_section">
  <div class="ifs-stage">

    <div class="deco" aria-hidden="true"><span class="ring"></span>

      <span class="badge"><svg viewBox="0 0 100 100">
          <path id="bp" d="M50,50 m-38,0 a38,38 0 1,1 76,0 a38,38 0 1,1 -76,0" fill="none" /><text>
            <textPath href="#bp" textLength="236">Movie Discovery · Popular Trailers · Easy Booking ·</textPath>
          </text>
        </svg><i>↓</i></span>

      <span class="orb"></span>

      <span class="pic">
        <!-- <img src="https://prception.in/assets/imgs/gallery/prception_marketing.jpeg" alt=""> -->
        <img src="assets_1/images/icons/s-favicon.png" alt="">
      </span>
    </div>

    <div class="wrap">
      <div>

        <p class="eyebrow h" style="--d:.6s">Sairam Movie Hub · Movies, trailers & bookings</p>

        <h1 class="h" style="--d:.72s">Book Your <em>Favourite Movies</em><br>Anytime, Anywhere.</h1>

        <p class="lead h" style="--d:.84s">Discover Telugu hits, explore the latest trailers, and book your next movie experience with Sairam Movie Hub.</p>

        <div class="acts h" style="--d:.96s"><a href="latest-movies.php" class="btn"><span class="bt"><span>Movies</span><span aria-hidden="true">Movies</span></span><b>→</b></a><a href="latest-trailers.php" class="link">Trailers <span>→</span></a></div>
      </div>

      <div class="side h" style="--d:1.08s">
        <div class="hs6">
          <div class="hs6-i"><strong data-n="500" data-s="+">0</strong><span>Movies</span></div>
          <div class="hs6-i"><strong data-n="150" data-s="+">0</strong><span>Theatres</span></div>
          <div class="hs6-i"><strong data-n="3000" data-s="+">0</strong><span>Bookings</span></div>
          <div class="hs6-i"><strong data-n="2500" data-s="+">0</strong><span>Happy Customers</span></div>
        </div>

        <p>Your next great movie night starts here. Find a film, pick your seats, and enjoy the show.</p>
      </div>
    </div>

    <div class="hero-morph" aria-hidden="true">

      <span class="morph-ring"></span><span class="morph-bars"><i></i><i></i><i></i><i></i><i></i></span>

      <span class="morph-growth"></span><span class="morph-corner tl"></span><span class="morph-corner br"></span>

    </div>

    <h1 class="giant big h" style="--d:1.2s;font-weight:800;color:white">Movies Hub</h1>

    <p class="morph-caption">Discover Telugu hits, explore the latest trailers, and book your next movie experience with Sairam Movie Hub.</p>

    <a href="#about" class="btn s morph-cta"><span class="bt"><span>Learn More</span><span aria-hidden="true">Learn More</span></span></a>

  </div>
</section>

<section class="genie" id="genie">

  <div id="gw"></div>

  <div class="gq"><small>( Your next movie night )</small>

    <h2>What makes a movie night <em>unforgettable?</em></h2>

    <p>Great stories, big screens, and memories worth sharing.</p>
  </div>

  <h3 class="geasy big">Movie night made easy</h3>

  <span class="gone">Your next favorite film</span>

  <div class="lamp"><span class="tint"></span>

    <div class="top"><span>( Our movie picks )</span><span>The stories are endless. Choose your next one.</span></div>

    <div class="mid">
      <p>Your next movie is</p>
      <h3 class="rare big">Memorable</h3>
    </div>

    <div class="bot">
      <p>Find the stories everyone is talking about, from Telugu blockbusters to global favorites.</p><a href="latest-movies.php">Browse movies →</a>
    </div>
  </div>

</section>

<section class="ww" id="work">

  <div class="intro">
    <h2 class="big">Movies</h2>
    <p><span>(50+)</span>Discover movies and plan your next theatre visit.</p>
  </div>

  <div class="shade"></div>

  <div class="track" id="wt"></div>

  <div class="hud">
    <div class="row">
      <div><small id="hn"></small>
        <h3 id="hname"></h3>
      </div><a href="#" id="hvisit" class="btn s" target="_blank" rel="noopener" style="max-width:none;white-space:nowrap">View Movie</a>
    </div>
    <div class="bar"><i></i></div><a href="latest-movies.php" class="link" style="display:inline-block;margin:16px 0 24px">Explore Movies →</a>
  </div>

</section>

<section class="brands" id="brands">

  <div class="intro">
    <h2 class="big">Movies</h2>
    <p><span id="bc">05</span>Explore popular movies and discover your next favourite.</p><p>Find the right movie for your mood, explore trailers, and book your seats for a great cinema experience.</p>
  </div>

  <div id="bs"></div>

</section>

<!-- ===== NEEDLE: text fill + zoom ===== -->
<!-- <section class="nw" id="work-needle">
  <div class="nw-stage">
    <h2 class="nw-title" aria-label="The Movies That Moves The Needle">
      <span class="nw-line" aria-hidden="true">The Movies</span>
      <span class="nw-line" aria-hidden="true">That Moves</span>
      <span class="nw-line" aria-hidden="true">The Needle</span>
    </h2>
  </div>
</section> -->
<!-- ===== ABOUT US ===== -->
<section class="ab" id="about">
  <div class="ab-grid">

    <div class="ab-text">
      <h2 class="ab-title">About Us</h2>

      <p>Sairam Movie Hub brings movie lovers together with the latest releases, popular trailers, and a simple way to plan their next cinema experience.</p>

      <div class="ab-extra" id="abExtra">
        <div class="ab-extra-in">
          <p>Explore movies, watch trailers, and book tickets with Sairam Movie Hub. For assistance, email <a href="mailto:sairampachipala00@gmail.com">sairampachipala00@gmail.com</a> or call <a href="tel:+919390717011">+91 9390717011</a>. Follow us on <a href="https://www.instagram.com/sairam.patchipala/" target="_blank" rel="noopener">Instagram</a> and <a href="https://www.facebook.com/share/1AkKiwQYYR/" target="_blank" rel="noopener">Facebook</a>.</p>
        </div>
      </div>

      <button type="button" class="ab-btn" id="abMore" aria-expanded="false" aria-controls="abExtra">
        <span class="ab-lbl">Know More</span>
        <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
          <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>

    <div class="ab-imgwrap">
      <div class="ab-fold">
        <div class="ab-float">
          <img src="assets_1/images/movies/Movie-theatre-bg.png" alt="Sairam Movie Hub theatre experience" loading="lazy">
        </div>
      </div>
    </div>

  </div>
</section>



<section class="shift" id="how">

  <div class="hd">
    <div><small>( OUR PROCESS )</small>
      <h2>From discovery to showtime.</h2>
    </div>
    <div class="cnt"><span id="sn">01</span> <s>/ 06</s></div>
  </div>

  <div class="zone">
    <p class="bl">Your<br>next movie</p>
    <p class="sh">Sairam<br>Movies</p><span class="lens"></span>
  </div>

  <ol class="stp" id="sp" style="list-style:none"><span class="fill"></span></ol>

</section>



<section class="px-feel" id="px-feel">

  <div class="px-stick">

    <img class="px-s" src="assets_1/images/movies/Avengers-assemble.webp" alt="" loading="lazy">

    <img class="px-l" src="assets_1/images/movies/Animals.webp" alt="" loading="lazy">

    <div class="px-copy">
      <p class="px-t">Movies Worth Watching.
        Discover Telugu hits, explore the latest trailers, and book your next movie experience with Sairam Movie Hub.</p>
    </div>

    <a href="latest-movies.php" class="px-btn">Explore Movies</a>

  </div>

</section>





<section class="package-section" id="packages">

    <div class="container">


        <!-- Heading -->

        <div class="package-heading">

            <span class="package-tag">

                <i class="bi bi-stars"></i>

                Movie Experiences

            </span>


            <h2>

                Plan your next
                <span>movie night.</span>

            </h2>


            <p>

                Compare our movie discovery and ticket booking options,
                with show information for every stage
                of your movie night.

            </p>

        </div>


        <div class="package-mobile" aria-label="Mobile package comparison">
            <label class="package-mobile-label" for="package-mobile-select">Choose a movie</label>
            <div class="package-mobile-select-wrap">
                <select id="package-mobile-select" class="package-mobile-select" onchange="document.querySelectorAll('[data-package-panel]').forEach(panel => panel.hidden = panel.dataset.packagePanel !== this.value)">
                    <option value="basic">Basic</option>
                    <option value="standard">Standard</option>
                    <option value="premium">Premium</option>
                    <option value="growth">Family</option>
                </select>
                <i class="bi bi-chevron-down" aria-hidden="true"></i>
            </div>
            <div class="package-mobile-panel" data-package-panel="basic">
                <h3>Basic <span>Explore new releases</span></h3>
                <ul>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Movie Discovery</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Trailer Access</li>
                </ul>
                <a href="booking.html" data-package="Basic" class="package-select-btn package-basic-btn">See Showtimes <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="package-mobile-panel" data-package-panel="premium" hidden>
                <h3>Premium <span>Popular movie picks</span></h3>
                <ul>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Movie Discovery</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Trailer Access</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Easy Booking</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Movie Updates</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Personalized Picks</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Local Shows</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Secure Checkout</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Booking History</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Booking Support</li>
                </ul>
                <a href="booking.html" data-package="Premium" class="package-select-btn package-premium-btn">Book Premium <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="package-mobile-panel" data-package-panel="standard" hidden>
                <h3>Standard <span>Discover new releases</span></h3>
                <ul>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Movie Discovery</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Trailer Access</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Movie Updates</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Personalized Picks</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Booking History</li>
                </ul>
                <a href="booking.html" data-package="Standard" class="package-select-btn package-standard-btn">See Showtimes <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="package-mobile-panel" data-package-panel="growth" hidden>
                <h3>Family <span>Movie night for everyone</span></h3>
                <ul>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Movie Discovery</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Trailer Access</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Easy Booking</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Movie Updates</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Personalized Picks</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Local Shows</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Theatre Listings</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Secure Checkout</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Booking History</li>
                    <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i>Booking Support</li>
                </ul>
                <a href="booking.html" data-package="Family" class="package-select-btn package-growth-btn">Book Family Tickets <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        <!-- Table -->

        <div class="package-table-wrapper">

            <table class="package-table">


                <thead>

                    <tr>


                        <th class="package-service-head">

                            <span>
                                Movie Features
                            </span>

                            <strong>
                                Booking Options
                            </strong>

                        </th>


                        <!-- BASIC -->

                        <th class="package-plan-head package-basic">

                            <div class="package-plan-icon">

                                <i class="bi bi-lightning-charge"></i>

                            </div>

                            <span class="package-plan-name">
                                Basic
                            </span>

                            <span class="package-plan-text">
                                Explore new releases
                            </span>

                        </th>


                        <!-- STANDARD -->

                        <th class="package-plan-head package-standard">

                            <div class="package-plan-icon">

                                <i class="bi bi-star"></i>

                            </div>

                            <span class="package-plan-name">
                                Standard
                            </span>

                            <span class="package-plan-text">
                                Discover new releases
                            </span>

                        </th>


                        <!-- PREMIUM -->

                        <th class="package-plan-head package-premium">

                            <span class="package-popular">
                                Recommended
                            </span>

                            <div class="package-plan-icon">

                                <i class="bi bi-gem"></i>

                            </div>

                            <span class="package-plan-name">
                                Premium
                            </span>

                            <span class="package-plan-text">
                                Popular movie picks
                            </span>

                        </th>


                        <!-- GROWTH -->

                        <th class="package-plan-head package-growth">

                            <div class="package-plan-icon">

                                <i class="bi bi-graph-up-arrow"></i>

                            </div>

                            <span class="package-plan-name">
                                Family
                            </span>

                            <span class="package-plan-text">
                                Movie night for everyone
                            </span>

                        </th>

                    </tr>

                </thead>


                <tbody>


                    <!-- 1 -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-instagram"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Movie Discovery
                                    </span>

                                    <span class="package-service-sub">
                                        Movie discovery & booking support
                                    </span>

                                </span>

                            </div>

                        </td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td class="package-premium-cell"><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                    </tr>


                    <!-- 2 -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-palette2"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Trailer Access
                                    </span>

                                    <span class="package-service-sub">
                                        Movie trailers & updates
                                    </span>

                                </span>

                            </div>

                        </td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td class="package-premium-cell"><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                    </tr>


                    <!-- Easy Booking -->

                    <tr>
                        <td class="package-service">
                            <div class="package-service-box">
                                <span class="package-service-icon"><i class="bi bi-vector-pen"></i></span>
                                <span>
                                    <span class="package-service-title">Easy Booking</span>
                                    <span class="package-service-sub">Simple ticket booking</span>
                                </span>
                            </div>
                        </td>
                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>
                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>
                        <td class="package-premium-cell"><span class="package-check"><i class="bi bi-check-lg"></i></span></td>
                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>
                    </tr>


                    <!-- 3 -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-play-btn"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Movie Updates
                                    </span>

                                    <span class="package-service-sub">
                                        Latest movie trailers
                                    </span>

                                </span>

                            </div>

                        </td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td class="package-premium-cell"><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                    </tr>


                    <!-- 4 -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-lightbulb"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Personalized Picks
                                    </span>

                                    <span class="package-service-sub">
                                        Popular movie picks
                                    </span>

                                </span>

                            </div>

                        </td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td class="package-premium-cell"><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                    </tr>


                    <!-- 5 -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-search"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Local Shows
                                    </span>

                                    <span class="package-service-sub">
                                        Find local showtimes
                                    </span>

                                </span>

                            </div>

                        </td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td class="package-premium-cell"><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                    </tr>


                    <!-- 6 -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-window"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Theatre Listings
                                    </span>

                                    <span class="package-service-sub">
                                        Theatre and show details
                                    </span>

                                </span>

                            </div>

                        </td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td class="package-premium-cell"><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                    </tr>


                    <!-- 7 -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-megaphone"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Secure Checkout
                                    </span>

                                    <span class="package-service-sub">
                                        Secure ticket booking
                                    </span>

                                </span>

                            </div>

                        </td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td class="package-premium-cell"><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                    </tr>


                    <!-- 8 -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-bar-chart"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Booking History
                                    </span>

                                    <span class="package-service-sub">
                                        Your booking details
                                    </span>

                                </span>

                            </div>

                        </td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td class="package-premium-cell"><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                    </tr>


                    <!-- 9 -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-headset"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Booking Support
                                    </span>

                                    <span class="package-service-sub">
                                        Dedicated assistance
                                    </span>

                                </span>

                            </div>

                        </td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td><span class="package-cross"><i class="bi bi-x-lg"></i></span></td>

                        <td class="package-premium-cell"><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                        <td><span class="package-check"><i class="bi bi-check-lg"></i></span></td>

                    </tr>


                    <!-- CTA ROW -->

                    <tr>

                        <td class="package-service">

                            <div class="package-service-box">

                                <span class="package-service-icon">

                                    <i class="bi bi-stars"></i>

                                </span>

                                <span>

                                    <span class="package-service-title">
                                        Choose Your Movie
                                    </span>

                                    <span class="package-service-sub">
                                        Build the right growth system
                                    </span>

                                </span>

                            </div>

                        </td>


                        <td class="package-action-cell">

                            <a href="booking.html" data-package="Basic"
                               class="package-select-btn package-basic-btn">

                                Basic

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </td>


                        <td class="package-action-cell">

                            <a href="booking.html" data-package="Standard"
                               class="package-select-btn package-standard-btn">

                                Standard

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </td>


                        <td class="package-action-cell package-premium-cell">

                            <a href="booking.html" data-package="Premium"
                               class="package-select-btn package-premium-btn">

                                Book Premium

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </td>


                        <td class="package-action-cell">

                            <a href="booking.html" data-package="Family"
                               class="package-select-btn package-growth-btn">

                                Family

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </td>

                    </tr>


                </tbody>

            </table>

        </div>


        <div class="package-note">

            <i class="bi bi-shield-check"></i>

            Showtimes and ticket availability vary by theatre.

        </div>

    </div>

</section>

<!-- <section class="movie-packages" id="movie-packages" aria-labelledby="movie-packages-title">
  <div class="container-xxl movie-packages__container">
    <div class="row align-items-end gy-3 mb-4 mb-xl-5">
      <div class="col-lg-8">
        <span class="movie-packages__eyebrow"><span class="movie-packages__sparkle">✦</span> OUR PACKAGES</span>
        <h2 id="movie-packages-title" class="movie-packages__title">Find a movie<br><span>that fits your mood.</span></h2>
      </div>
      <div class="col-lg-4">
        <p class="movie-packages__intro">Browse our movie selection, check available showtimes, and choose the experience that suits you.</p>
      </div>
    </div>

    <div class="row g-3 g-xl-4 align-items-stretch">
      Card 1: Basic
      <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
        <article class="bhavi-plan h-100">
          <div class="bhavi-plan__top">
            <span class="bhavi-plan__pill">✦ &nbsp; BASIC</span>
            <span class="bhavi-plan__symbol" aria-hidden="true">↗</span>
          </div>
          <h3>Basic</h3>
          <div class="bhavi-plan__price">₹ XX,XXX <span>/ month</span></div>
          <p class="bhavi-plan__desc">Discover popular movies and available showtimes.</p>
          <ul class="bhavi-plan__features">
            <li>Movie recommendations</li>
            <li>Popular trailers</li>
            <li>Monthly movie updates</li>
            <li>Booking assistance</li>
          </ul>
          <a class="bhavi-plan__button" href="mailto:sairampachipala00@gmail.com?subject=Enquiry%20-%20Basic%20Package">Book Tickets <span aria-hidden="true">→</span></a>
        </article>
      </div>

      Card 2: Standard
      <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
        <article class="bhavi-plan bhavi-plan--featured h-100">
          <div class="bhavi-plan__top">
            <span class="bhavi-plan__pill">★ &nbsp; POPULAR</span>
            <span class="bhavi-plan__symbol" aria-hidden="true">✧</span>
          </div>
          <h3>Standard</h3>
          <div class="bhavi-plan__price">₹ XX,XXX <span>/ month</span></div>
          <p class="bhavi-plan__desc">Find trending movies and book your seats.</p>
          <ul class="bhavi-plan__features">
            <li>Popular movie updates</li>
            <li>Popular trailers and clips</li>
            <li>Personalized movie picks</li>
            <li>Movie recommendations</li>
            <li>Booking support</li>
          </ul>
          <a class="bhavi-plan__button" href="mailto:sairampachipala00@gmail.com?subject=Enquiry%20-%20Standard%20Package">Book Tickets <span aria-hidden="true">→</span></a>
        </article>
      </div>

      Card 3: Premium
      <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
        <article class="bhavi-plan h-100">
          <div class="bhavi-plan__top">
            <span class="bhavi-plan__pill">✦ &nbsp; PREMIUM</span>
            <span class="bhavi-plan__symbol" aria-hidden="true">◇</span>
          </div>
          <h3>Premium</h3>
          <div class="bhavi-plan__price">Custom <span>/ scope based</span></div>
          <p class="bhavi-plan__desc">Enjoy a premium movie night with easy booking.</p>
          <ul class="bhavi-plan__features">
            <li>Movie discovery and ticket booking</li>
            <li>Movie updates and trailers</li>
            <li>Personalized movie picks</li>
            <li>Theatre information</li>
            <li>Dedicated coordination</li>
          </ul>
          <a class="bhavi-plan__button" href="mailto:sairampachipala00@gmail.com?subject=Enquiry%20-%20Premium%20Package">Contact Sairam Movie Hub <span aria-hidden="true">→</span></a>
        </article>
      </div>

      Card 4: Family
      <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
        <article class="bhavi-plan h-100">
          <div class="bhavi-plan__top">
            <span class="bhavi-plan__pill">✦ &nbsp; GROWTH</span>
            <span class="bhavi-plan__symbol" aria-hidden="true">★</span>
          </div>
          <h3>Family</h3>
          <div class="bhavi-plan__price">₹ XX,XXX <span>/ month</span></div>
          <p class="bhavi-plan__desc">Make it a movie night for the whole family.</p>
          <ul class="bhavi-plan__features">
            <li>Family movie recommendations</li>
            <li>Reels and short videos</li>
            <li>Family movie picks</li>
            <li>Easy ticket booking</li>
            <li>Quick booking support</li>
          </ul>
          <a class="bhavi-plan__button" href="mailto:sairampachipala00@gmail.com?subject=Enquiry%20-%20Family%20Package">Book Tickets <span aria-hidden="true">→</span></a>
        </article>
      </div>
    </div>

    <p class="movie-packages__note">Movie availability and ticket prices depend on the selected theatre and showtime.</p>
  </div>
</section> -->


<!-- <section class="stmt"><p>People do not buy what is best they buy what makes them feel certain. Perception is the engineering of certainty.</p></section> -->

<!-- ===== ADDED (live site): logo zoom transition ===== -->
<section class="px-zoom" id="px-zoom">
  <div class="px-zstage">

    
     <img class="px-zlogo" src="assets_1/images/movies/sairam-movie-logo-removebg-preview.png" alt="Sairam Movie Hub">

    <p class="px-ztext">Sairam Movie Hub makes it easy to discover movies, watch trailers, and book your next cinema experience.</p>

    <span class="px-zfade"></span>

  </div>
</section>

<!-- ===== ADDED (live site): "Prception helps brands choose the right story" + physics chips ===== -->
<section class="px-help">

  <div class="px-hd">

    <h2 class="px-h2">Sairam Movie Hub helps you discover new releases, watch popular trailers, and book your favourite movies.</h2>

    <p class="px-p">Explore Telugu releases, trending titles, and popular movies from around the world in one place.</p>

  </div>

  <div class="px-rows" id="pxr"></div>

</section>

<section class="cl">
  <small>( Movies to discover )</small>

  <div class="mq">
    <div class="mt" id="mt"></div>
  </div>
</section>

<section class="cta" id="cta">
  <div class="wrap">

    <!-- <h2 class="rv">Let's<br>get in<br>touch</h2> -->
    <h2 class="rv">Let's <br class="dbr">get in <br class="dbr">touch</h2>

    <div class="rv" style="flex:0 1 550px;width:100%">
      <form id="f"><input name="name" placeholder="FULL NAME" required>

        <label class="contact-package-label" for="packageChoice">Choose a movie</label>
        <select name="package" id="packageChoice" class="contact-package-select">
          <option value="">Select a movie (optional)</option>
          <option value="Basic">Basic</option>
          <option value="Standard">Standard</option>
          <option value="Premium">Premium</option>
          <option value="Family">Family</option>
        </select>

        <div class="two"><input type="email" name="email" placeholder="EMAIL" required><input type="tel" name="number" placeholder="PHONE"></div>

        <label class="contact-package-label" for="contactPlace">Place</label>
        <select name="place" id="contactPlace" class="contact-package-select">
          <option value="">Select a place</option>
          <option value="Vizag">Vizag</option>
          <option value="Kakinada">Kakinada</option>
          <option value="Rajahmundry">Rajahmundry</option>
          <option value="Hyderabad">Hyderabad</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Delhi">Delhi</option>
          <option value="Thiruvananthapuram">Thiruvananthapuram</option>
        </select>

        <textarea name="remarks" rows="4" placeholder="MESSAGE"></textarea>

        <button class="go" aria-label="Submit"><span class="go-a">→</span><span class="go-a">→</span></button>
      </form>

      <div class="loc">
        <div>
          <h4>CONTACT</h4>+91 9390717011<br>sairampachipala00@gmail.com
        </div>
        <!-- Address display hidden; location is captured by the Place form field. -->
      </div>
    </div>

  </div>
</section>

<script>
  document.querySelectorAll('[data-package]').forEach(function (link) {
    link.addEventListener('click', function () {
      var packageField = document.getElementById('packageChoice');
      if (packageField) packageField.value = link.dataset.package;
    });
  });
</script>

<!-- ===== ADDED (live site): Medialab Dispatch widget ===== -->
<section class="px-news" id="pxNews">
  <div class="nws">
    <div class="nws-hd">
      <h3><b>Sairam</b> Movie Hub</h3>
      <div class="nws-ar"><button type="button" id="nwsP" aria-label="Previous">‹</button><button type="button" id="nwsN" aria-label="Next">›</button></div>
    </div>
    <div class="nws-vp" id="nwsVp">
      <div class="nws-tr" id="nwsTr"></div>
    </div>
    <div class="nws-ft">
      <div class="nws-dots" id="nwsD"></div><!-- <a href="index.php" target="_blank" rel="noopener"> Sairam Movie Hub site ↗</a> -->
    </div>
  </div>
</section>

<?php include 'chatbot.php'; ?>
<?php include 'footer.php'; ?>
