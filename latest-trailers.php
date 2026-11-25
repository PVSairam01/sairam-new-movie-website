<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sairam Movie Hub | Book Your Favourite Movies Anytime, Anywhere.</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
          rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets_1/css/style.css">

    <link rel="stylesheet" href="assets_1/css/visual-effects.css">

    <link rel="stylesheet" href="assets_1/css/header-mobile-theme.css">
    <link rel="stylesheet" href="assets_1/css/new_style.css">
    <link rel="stylesheet" href="assets_1/css/prception-cinema.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:wght@400;500;700&family=Instrument+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets_1/css/prception-case-motion.css?v=<?= filemtime(__DIR__ . '/assets_1/css/prception-case-motion.css') ?>">
    <link rel="stylesheet" href="assets_1/css/prception-movie-overrides.css?v=<?= filemtime(__DIR__ . '/assets_1/css/prception-movie-overrides.css') ?>">
    <link rel="stylesheet" href="assets_1/css/movie-catalog-theme.css?v=<?= filemtime(__DIR__ . '/assets_1/css/movie-catalog-theme.css') ?>">
    <link rel="stylesheet" href="assets_1/css/movie-image-fit.css?v=<?= filemtime(__DIR__ . '/assets_1/css/movie-image-fit.css') ?>">
</head>

<body class="movie-catalog-page">
<?php include 'header.php'; ?>
<?php include 'movie-prception-motion.php'; ?>

<!-- ========================================================= -->
<!-- SIDE MENU OVERLAY -->
<!-- ========================================================= -->

<div
    class="movie-menu-overlay"
    id="movieMenuOverlay"
    onclick="closeSideMenu()">
</div>


<!-- ========================================================= -->
<!-- RIGHT SIDE MENU -->
<!-- ========================================================= -->

<aside
    class="movie-side-menu"
    id="movieSideMenu">

    <!-- MENU HEADER -->

    <div class="movie-side-menu-header">

        <h3>Hey!</h3>

        <button
            class="movie-menu-close"
            onclick="closeSideMenu()">
            <i class="bi bi-x-lg"></i>
        </button>

    </div>


    <!-- LOGIN -->

    <div class="movie-login-row">

        <div class="movie-profile-placeholder">

            <i class="bi bi-person"></i>

        </div>


        <div class="movie-login-text">

            <strong>
                Unlock special offers &
                great benefits
            </strong>

        </div>


        <button
            class="movie-login-register"
            onclick="window.staticToggleLogin()">
            Login / Register
        </button>

    </div>


    <!-- MENU ITEMS -->

    <div class="movie-menu-list">

        <!-- Navigation links (mobile + tab only) -->
       <a href="index.html" class="movie-menu-item d-lg-none">
          <div class="movie-menu-icon"><i class="fa-solid fa-house"></i></div>
          <div class="movie-menu-content"><strong>Home</strong></div>
          <i class="bi bi-chevron-right"></i>
      </a>

      <a href="latest-movies.php" class="movie-menu-item d-lg-none">
          <div class="movie-menu-icon"><i class="fa-solid fa-film"></i></div>
          <div class="movie-menu-content"><strong>Movies</strong></div>
          <i class="bi bi-chevron-right"></i>
      </a>

      <a href="latest-trailers.php" class="movie-menu-item d-lg-none">
         <div class="movie-menu-icon"><i class="bi bi-play-circle-fill"></i></div>
         <div class="movie-menu-content"><strong>Trailers</strong></div>
         <i class="bi bi-chevron-right"></i>
      </a>

      <a href="booking.php" class="movie-menu-item d-lg-none">
         <div class="movie-menu-icon"><i class="fa-solid fa-glasses"></i></div>
         <div class="movie-menu-content"><strong>3D Experience</strong></div>
         <i class="bi bi-chevron-right"></i>
     </a>


        <!-- Notifications -->

        <button class="movie-menu-item">

            <div class="movie-menu-icon">
                <i class="bi bi-bell"></i>
            </div>

            <div class="movie-menu-content">

                <strong>Notifications</strong>

            </div>

            <i class="bi bi-chevron-right"></i>

        </button>


        <!-- Orders -->

        <!-- <button class="movie-menu-item disabled">

            <div class="movie-menu-icon">
                <i class="bi bi-bag"></i>
            </div>

            <div class="movie-menu-content">

                <strong>Your Orders</strong>

                <small>
                    View all your bookings & purchases
                </small>

            </div>

            <i class="bi bi-lock"></i>

        </button> -->
        <!-- Your Orders -->
        <button class="movie-menu-item disabled d-none d-lg-flex">

        <!-- Stream Library -->
       <button class="movie-menu-item disabled d-none d-lg-flex">

       <!-- Accounts & Settings -->
       <button class="movie-menu-item disabled d-none d-lg-flex">

        <!-- Wishlist -->

        <button class="movie-menu-item">

            <div class="movie-menu-icon">
                <i class="bi bi-heart"></i>
            </div>

            <div class="movie-menu-content">

                <strong>Your Wishlist</strong>

            </div>

            <i class="bi bi-chevron-right"></i>

        </button>


        <!-- Stream Library -->

        <!-- <button class="movie-menu-item disabled">

            <div class="movie-menu-icon">
                <i class="bi bi-tv"></i>
            </div>

            <div class="movie-menu-content">

                <strong>Stream Library</strong>

                <small>
                    Rented & Purchased Movies
                </small>

            </div>

            <i class="bi bi-lock"></i>

        </button> -->


        <!-- Credit Card -->

        <button class="movie-menu-item">

            <div class="movie-menu-icon">
                <i class="bi bi-credit-card"></i>
            </div>

            <div class="movie-menu-content">

                <strong>Play Credit Card</strong>

                <small>
                    View your Play Credit Card details and offers
                </small>

            </div>

            <i class="bi bi-chevron-right"></i>

        </button>


        <!-- Help -->

        <button class="movie-menu-item">

            <div class="movie-menu-icon">
                <i class="bi bi-chat-dots"></i>
            </div>

            <div class="movie-menu-content">

                <strong>Help & Support</strong>

                <small>
                    View commonly asked queries and Chat
                </small>

            </div>

            <i class="bi bi-chevron-right"></i>

        </button>


        <!-- Settings -->

        <!-- <button class="movie-menu-item disabled">

            <div class="movie-menu-icon">
                <i class="bi bi-gear"></i>
            </div>

            <div class="movie-menu-content">

                <strong>Accounts & Settings</strong>

                <small>
                    Location, Payments, Permissions & More
                </small>

            </div>

            <i class="bi bi-lock"></i>

        </button> -->


        <!-- Rewards -->

        <button class="movie-menu-item">

            <div class="movie-menu-icon">
                <i class="bi bi-gift"></i>
            </div>

            <div class="movie-menu-content">

                <strong>Rewards</strong>

                <small>
                    View your rewards & unlock new ones
                </small>

            </div>

            <i class="bi bi-chevron-right"></i>

        </button>


        <!-- Book A Change -->

        <button class="movie-menu-item">

            <div class="movie-menu-icon">
                <i class="bi bi-globe"></i>
            </div>

            <div class="movie-menu-content">

                <strong>BookAChange</strong>

            </div>

            <i class="bi bi-chevron-right"></i>

        </button>

    </div>

</aside>


<!-- =========================================================
OFFCANVAS MOBILE MENU
========================================================= -->

<div class="offcanvas offcanvas-end"
        tabindex="-1"
        id="mobileMenu">

        <div class="offcanvas-header border-bottom">

            <h5 class="offcanvas-title fw-bold">
                Menu
            </h5>

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas">
            </button>

        </div>


        <div class="offcanvas-body">

            <ul class="nav flex-column gap-3 fs-5 fw-semibold">

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">
                        Movies
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">
                        Theatres
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">
                        Events
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">
                        Offers
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">
                        Contact Us
                    </a>
                </li>


                
                    <li class="nav-item mt-3">

                        <a class="btn btn-primary w-100 py-2"
                           href="#"
                           id="openLoginMobile">
                            Sign In
                        </a>

                    </li>

                
            </ul>

        </div>

    </div>
<!-- =========================================================
     WATCHMODE LATEST TRAILERS
========================================================= -->

<style>
.latest-trailers-gold-wrapper {
    width: 100%;
    background: var(--premium-page-gradient);
    color: var(--premium-text);
    padding: 45px 0 !important;
    font-family: system-ui, -apple-system, sans-serif !important;
}

.latest-trailers-gold-wrapper .trailers-container {
    max-width: 1350px;
    margin: 0 auto;
    padding: 0 20px;
}

.latest-trailers-gold-wrapper .trailers-header {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 25px;
    margin-bottom: 25px;
    flex-wrap: wrap;
}

.latest-trailers-gold-wrapper .trailers-title {
    font-size: 1.75rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0;
}

.latest-trailers-gold-wrapper .trailers-note {
    margin: 0;
    color: #e8c978;
    font-size: .9rem;
    line-height: 1.5;
}

.latest-trailers-gold-wrapper .tab-selector-pill {
    display: flex;
    align-items: center;
    background: #121216;
    border: 1px solid rgba(212, 175, 55, 0.4);
    border-radius: 50px;
    padding: 3px;
    overflow-x: auto;
    max-width: 100%;
}

.latest-trailers-gold-wrapper .tab-btn {
    padding: 6px 20px;
    border-radius: 50px;
    color: #cccccc;
    font-size: 0.88rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.latest-trailers-gold-wrapper .tab-btn:hover {
    color: #d4af37;
}

.latest-trailers-gold-wrapper .tab-btn.active {
    background: linear-gradient(
        135deg,
        #d4af37 0%,
        #f39c12 100%
    );
    color: #000000 !important;
    font-weight: 700;
    box-shadow: 0 0 12px rgba(212, 175, 55, 0.5);
}

.latest-trailers-gold-wrapper .scroller-track {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    padding-bottom: 25px;
    scroll-behavior: smooth;
}

.latest-trailers-gold-wrapper .scroller-track::-webkit-scrollbar {
    height: 7px;
}

.latest-trailers-gold-wrapper .scroller-track::-webkit-scrollbar-track {
    background: #121216;
    border-radius: 10px;
}

.latest-trailers-gold-wrapper .scroller-track::-webkit-scrollbar-thumb {
    background: #d4af37;
    border-radius: 10px;
}

.latest-trailers-gold-wrapper .trailer-card {
    flex: 0 0 310px;
    width: 310px;
    display: flex;
    flex-direction: column;
    cursor: pointer;
    text-decoration: none;
}

.latest-trailers-gold-wrapper .card-thumbnail {
    position: relative;
    width: 100%;
    height: 175px;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid rgba(212, 175, 55, 0.25);
    background-color: #000000;
    transition: all 0.3s ease;
}

.latest-trailers-gold-wrapper .trailer-card:hover .card-thumbnail {
    transform: translateY(-4px);
    border-color: #d4af37;
    box-shadow: 0 6px 20px rgba(212, 175, 55, 0.35);
}

.latest-trailers-gold-wrapper .backdrop-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.latest-trailers-gold-wrapper .card-options-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0, 0, 0, 0.6);
    color: #ffffff;
    width: 26px;
    height: 26px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85rem;
    z-index: 3;
}

.latest-trailers-gold-wrapper .play-btn-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50px;
    height: 50px;
    background: rgba(0, 0, 0, 0.5);
    border: 2px solid #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 1.6rem;
    transition: all 0.3s ease;
    z-index: 2;
}

.latest-trailers-gold-wrapper .trailer-card:hover .play-btn-overlay {
    background: #d4af37;
    border-color: #d4af37;
    color: #000000;
    transform: translate(-50%, -50%) scale(1.15);
}

.latest-trailers-gold-wrapper .card-meta {
    padding-top: 10px;
    text-align: center;
}

.latest-trailers-gold-wrapper .movie-title {
    color: #ffffff;
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 2px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.latest-trailers-gold-wrapper .trailer-subtitle {
    color: #a0a0a0;
    font-size: 0.82rem;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: 0;
}

/* Empty / Error */
.latest-trailers-gold-wrapper .watchmode-empty {
    width: 100%;
    padding: 35px 20px;
    border: 1px solid rgba(212, 175, 55, 0.25);
    border-radius: 12px;
    background: #101014;
    color: #d4af37;
    text-align: center;
}

.latest-trailers-gold-wrapper .watchmode-empty i {
    font-size: 2rem;
    margin-bottom: 10px;
    display: block;
}

.latest-trailers-gold-wrapper .watchmode-empty strong {
    color: #ffffff;
    display: block;
    margin-bottom: 5px;
}

.latest-trailers-gold-wrapper .watchmode-empty small {
    color: #999999;
}

/* Modal */
.trailers-gold-modal .modal-content {
    background-color: #0c0c10 !important;
    border: 1px solid #d4af37 !important;
    border-radius: 12px !important;
    overflow: hidden;
}

.trailers-gold-modal .modal-header {
    border-bottom: 1px solid rgba(212, 175, 55, 0.3) !important;
}

.trailers-gold-modal .modal-title {
    color: #d4af37 !important;
    font-weight: 700;
}

.trailers-gold-modal .modal-body {
    background: #000000;
}

/* Mobile */
@media (max-width: 767px) {

    .latest-trailers-gold-wrapper {
        padding: 30px 0 !important;
    }

    .latest-trailers-gold-wrapper .trailers-container {
        padding: 0 15px;
    }

    .latest-trailers-gold-wrapper .trailers-header {
        gap: 15px;
        margin-bottom: 20px;
    }

    .latest-trailers-gold-wrapper .trailers-title {
        font-size: 1.45rem;
        width: 100%;
    }

    .latest-trailers-gold-wrapper .tab-selector-pill {
        width: 100%;
        justify-content: flex-start;
        overflow-x: auto;
        scrollbar-width: none;
    }

    .latest-trailers-gold-wrapper .tab-selector-pill::-webkit-scrollbar {
        display: none;
    }

    .latest-trailers-gold-wrapper .tab-btn {
        padding: 6px 15px;
        font-size: 0.82rem;
    }

    .latest-trailers-gold-wrapper .trailer-card {
        flex: 0 0 270px;
        width: 270px;
    }

    .latest-trailers-gold-wrapper .card-thumbnail {
        height: 152px;
    }

    .latest-trailers-gold-wrapper .movie-title {
        font-size: 0.95rem;
    }

    .latest-trailers-gold-wrapper .trailer-subtitle {
        font-size: 0.78rem;
    }
}
</style>


<!-- =========================================================
     MAIN LAYOUT
========================================================= -->

<div class="latest-trailers-gold-wrapper">

    <div class="trailers-container">

        <!-- HEADER + TABS -->
        <div class="trailers-header">

            <h2 class="trailers-title">
                Latest Trailers
            </h2>

            <p class="trailers-note">Popular, streaming, TV, rent and theatre trailers — all in one place.</p>

        </div>


        <!-- =================================================
             TRAILER SCROLLER
        ================================================== -->

        <div id="trailerScroller" class="scroller-track">

                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_ramayana"
                    >

                        <div class="card-thumbnail">

                            <img
                                class="backdrop-img"
                                src="https://img.youtube.com/vi/KxPTn9b9N2U/hqdefault.jpg"
                                alt="Ramayana: Rise of a Legend (Hindi)"
                                loading="lazy"
                            >

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>

                        <div class="card-meta">

                            <div class="movie-title">
                                Ramayana: Rise of a Legend
                            </div>

                            <p class="trailer-subtitle">
                                Official Hindi Trailer
                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_ramayana"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Ramayana: Rise of a Legend (Hindi)
                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>

                                <div class="modal-body p-0">

                                    <div class="ratio ratio-16x9">

                                        <iframe
                                            data-src="https://www.youtube-nocookie.com/embed/KxPTn9b9N2U?autoplay=1&amp;rel=0"
                                            allowfullscreen
                                            allow="autoplay; encrypted-media; picture-in-picture"
                                            loading="lazy"
                                        ></iframe>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

            
                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_0_11233940"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/4673602_pthumbnail_320.jpg"
                                    alt="A Story of Derry"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                A Story of Derry                            </div>

                            <p class="trailer-subtitle">
                                Latest Horror Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_0_11233940"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        A Story of Derry                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/iOjzJsHS0M0?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_1_11049995"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/4497841_pthumbnail_320.jpg"
                                    alt="Masterplan"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                Masterplan                            </div>

                            <p class="trailer-subtitle">
                                Latest Action Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_1_11049995"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Masterplan                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/gc0t8AfMP6k?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_2_1942762"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/4577488_pthumbnail_320.jpg"
                                    alt="Comrade Kalyan"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                Comrade Kalyan                            </div>

                            <p class="trailer-subtitle">
                                Latest Telugu Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_2_1942762"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Comrade Kalyan                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/QTz5PqZspEs?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_3_1821329"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/4443508_pthumbnail_320.jpg"
                                    alt="Tenzing"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                Tenzing                            </div>

                            <p class="trailer-subtitle">
                                Latest Action Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_3_1821329"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Tenzing                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/KkYCY5YR12U?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_4_1784996"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/4439202_pthumbnail_320.jpg"
                                    alt="Animals"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                Animals                            </div>

                            <p class="trailer-subtitle">
                                Latest Action Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_4_1784996"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Animals                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/mlBfQJ8oxB0?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_5_1725513"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/4356887_pthumbnail_320.jpg"
                                    alt="Matchbox the Movie"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                Matchbox the Movie                            </div>

                            <p class="trailer-subtitle">
                                Latest Action Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_5_1725513"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Matchbox the Movie                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/7xfqITrMDcI?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_6_1803024"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/4546092_pthumbnail_320.jpg"
                                    alt="Don't Trouble the Trouble"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                Don't Trouble the Trouble                            </div>

                            <p class="trailer-subtitle">
                                Latest Telugu Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_6_1803024"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Don't Trouble the Trouble                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/CyuQsFP1Jww?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_7_1979177"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/4546060_pthumbnail_320.jpg"
                                    alt="Livestream from Hell"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                Livestream from Hell                            </div>

                            <p class="trailer-subtitle">
                                Latest Horror Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_7_1979177"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Livestream from Hell                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/RvkFXSwqoyE?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_8_1874789"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/3776097_pthumbnail_320.jpg"
                                    alt="The Paradise"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                The Paradise                            </div>

                            <p class="trailer-subtitle">
                                Latest Telugu Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_8_1874789"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        The Paradise                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/NkZFnpDhdCk?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                
                    
                    <!-- =========================================
                         TRAILER CARD
                    ========================================== -->

                    <div
                        class="trailer-card"
                        data-bs-toggle="modal"
                        data-bs-target="#watchmodeTrailerModal_9_1927112"
                    >

                        <div class="card-thumbnail">

                            
                                <img
                                    class="backdrop-img"
                                    src="https://cdn.watchmode.com/video_thumbnails/4368783_pthumbnail_320.jpg"
                                    alt="Heart of the Beast"
                                    loading="lazy"
                                >

                            

                            <!-- OPTIONS -->

                            <div class="card-options-btn">
                                <i class="bi bi-three-dots"></i>
                            </div>


                            <!-- PLAY -->

                            <div class="play-btn-overlay">
                                <i class="bi bi-play-fill"></i>
                            </div>

                        </div>


                        <!-- META -->

                        <div class="card-meta">

                            <div class="movie-title">
                                Heart of the Beast                            </div>

                            <p class="trailer-subtitle">
                                Latest Action Movie                            </p>

                        </div>

                    </div>


                    <!-- =========================================
                         VIDEO MODAL
                    ========================================== -->

                    <div
                        class="modal fade trailers-gold-modal"
                        id="watchmodeTrailerModal_9_1927112"
                        tabindex="-1"
                        aria-hidden="true"
                    >

                        <div
                            class="modal-dialog modal-lg modal-dialog-centered"
                        >

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        Heart of the Beast                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>

                                </div>


                                <div class="modal-body p-0">

                                    
                                        <div class="ratio ratio-16x9">

                                            <iframe
                                                data-src="https://www.youtube-nocookie.com/embed/JFQcDFhNh4o?autoplay=1&amp;rel=0"
                                                allowfullscreen
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                loading="lazy"
                                            ></iframe>

                                        </div>

                                    
                                </div>

                            </div>

                        </div>

                    </div>

                

            
        </div>

    </div>

</div>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | HORIZONTAL AUTO SCROLL
    |--------------------------------------------------------------------------
    */

    const scroller =
        document.getElementById('trailerScroller');

    let isHovered = false;

    if (scroller) {

        scroller.addEventListener(
            'mouseenter',
            function () {
                isHovered = true;
            }
        );

        scroller.addEventListener(
            'mouseleave',
            function () {
                isHovered = false;
            }
        );


        setInterval(function () {

            /*
            | Don't auto-scroll when user is interacting
            */

            if (!isHovered) {

                if (
                    scroller.scrollLeft +
                    scroller.clientWidth >=
                    scroller.scrollWidth - 1
                ) {

                    scroller.scrollLeft = 0;

                } else {

                    scroller.scrollLeft += 0.8;

                }

            }

        }, 25);

    }


    /*
    |--------------------------------------------------------------------------
    | BOOTSTRAP MODAL
    |--------------------------------------------------------------------------
    | Load YouTube iframe only when modal opens.
    */

    document
        .querySelectorAll('.trailers-gold-modal')
        .forEach(function (modal) {

            modal.addEventListener(
                'show.bs.modal',
                function () {

                    const iframe =
                        modal.querySelector(
                            'iframe[data-src]'
                        );

                    if (
                        iframe &&
                        !iframe.getAttribute('src')
                    ) {

                        iframe.setAttribute(
                            'src',
                            iframe.getAttribute('data-src')
                        );

                    }

                }
            );


            /*
            | Stop YouTube video when modal closes
            */

            modal.addEventListener(
                'hidden.bs.modal',
                function () {

                    const iframe =
                        modal.querySelector('iframe');

                    if (iframe) {

                        iframe.setAttribute(
                            'src',
                            ''
                        );

                    }

                }
            );

        });

});

</script>




    <!-- ========================================================= -->
    <!-- LOGIN POPUP -->

    <div class="login_popup"
         id="loginPopup">


        <div class="login_card">


            <!-- Close -->
            <button class="close_popup"
                    id="closePopup">

                <i class="bi bi-x-lg"></i>

            </button>


            <h2 class="login_title">
                Get Started
            </h2>


            <!-- Google -->
            <button class="login_btn"
                    id="googleLoginBtn">

                <img
                    src="assets_1/images/icons/google.png"
                    alt="Google"
                    onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg'">

                <span>
                    Continue with Google
                </span>

            </button>


            <!-- Email -->
            <button class="login_btn">

                <i class="bi bi-envelope"></i>

                <span>
                    Continue with Email
                </span>

            </button>


            <!-- Apple -->
            <button class="login_btn">

                <i class="bi bi-apple"></i>

                <span>
                    Continue with Apple
                </span>

            </button>


            <!-- OR -->
            <div class="login_or">

                <span>
                    OR
                </span>

            </div>


            <!-- Mobile Login -->
            <div class="mobile_login_box">


                <div class="country_code">

                    <img
                        src="assets_1/images/icons/india.png"
                        alt="India"
                        onerror="this.src='https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg'">

                    <span>
                        +91
                    </span>

                    <i class="bi bi-chevron-down"></i>

                </div>


                <input
                    type="text"
                    placeholder="Continue with mobile number">

            </div>


            <!-- Terms -->
            <p class="login_terms">

                I agree to

                <a href="#">
                    Terms & Conditions
                </a>

                and

                <a href="#">
                    Privacy Policy
                </a>

            </p>


        </div>

    </div>

    <!-- ========================================================= -->
<!-- MOVIE DETAILS - PREMIUM MOVIE OVERLAY                    -->
<!-- ========================================================= -->
<div class="movie-details-overlay" id="movieDetailsOverlay" aria-hidden="true">
    <div class="movie-details-backdrop" onclick="closeMovieDetails()"></div>

    <section class="movie-details-panel" id="movieDetailsPanel" role="dialog" aria-modal="true" aria-labelledby="movieDetailsTitle">
        <button type="button" class="movie-details-close" onclick="closeMovieDetails()" aria-label="Close movie details">
            <i class="bi bi-x-lg"></i>
        </button>

        <div class="movie-details-hero">
            <img id="movieDetailsBackdrop" src="" alt="Movie background">
            <div class="movie-details-hero-overlay"></div>
        </div>

        <div class="movie-details-body">
            <div class="movie-details-main">
                <div class="movie-details-poster-wrap">
                    <img id="movieDetailsPoster" class="movie-details-poster" src="" alt="Movie poster">
                    <span class="movie-details-status">In cinemas</span>
                </div>

                <div class="movie-details-info">
                    <span class="movie-details-kicker">MOVIE DETAILS</span>
                    <h2 id="movieDetailsTitle">Movie Title</h2>

                    <div class="movie-details-rating-row">
                        <div class="movie-details-rating">
                            <i class="bi bi-star-fill"></i>
                            <strong id="movieDetailsRating">9.2/10</strong>
                            <span id="movieDetailsVotes">120K+ Votes</span>
                        </div>
                        <button type="button" class="movie-rate-btn">Rate now</button>
                    </div>

                    <p class="movie-details-meta" id="movieDetailsMeta"></p>

                    <div class="movie-details-tags" id="movieDetailsTags"></div>

                    <div class="movie-details-actions">
                        <button type="button" class="movie-book-btn" onclick="bookSelectedMovie()">
                            <i class="bi bi-ticket-perforated-fill"></i>
                            Book tickets
                        </button>
                        <button type="button" class="movie-share-btn" onclick="shareSelectedMovie()">
                            <i class="bi bi-share"></i>
                            Share
                        </button>
                    </div>
                </div>
            </div>

            <div class="movie-about-section">
                <h3>About the movie</h3>
                <p class="movie-accessibility"><strong>Accessibility:</strong> Closed Captions (CC) &amp; Audio Description (AD) available.</p>
                <p id="movieDetailsStory"></p>
            </div>

            <div class="movie-offers-section">
                <div class="movie-details-section-heading">
                    <h3>Top offers for you</h3>
                    <span>View all <i class="bi bi-chevron-right"></i></span>
                </div>
                <div class="movie-offers-grid">
                    <button type="button" class="movie-offer-card">
                        <i class="bi bi-ticket-perforated-fill"></i>
                        <span><strong>Enjoy special ticket offers</strong><small>Tap to view details</small></span>
                    </button>
                    <button type="button" class="movie-offer-card">
                        <i class="bi bi-check2-circle"></i>
                        <span><strong>Buy 1 get 1 movie tickets</strong><small>Tap to view details</small></span>
                    </button>
                </div>
            </div>

            <div class="movie-cast-section">
                <div class="movie-details-section-heading">
                    <h3>Cast</h3>
                    <button type="button" class="movie-carousel-arrow" onclick="scrollMovieRow('movieCastRow')"><i class="bi bi-chevron-right"></i></button>
                </div>
                <div class="movie-person-row" id="movieCastRow"></div>
            </div>

            <div class="movie-crew-section">
                <div class="movie-details-section-heading">
                    <h3>Crew</h3>
                    <button type="button" class="movie-carousel-arrow" onclick="scrollMovieRow('movieCrewRow')"><i class="bi bi-chevron-right"></i></button>
                </div>
                <div class="movie-person-row" id="movieCrewRow"></div>
            </div>

            <div class="movie-reviews-section">
                <div class="movie-details-section-heading">
                    <h3>Critic reviews</h3>
                    <span>See all <i class="bi bi-chevron-right"></i></span>
                </div>
                <article class="movie-review-card">
                    <div class="movie-review-top">
                        <span class="movie-review-avatar"><i class="bi bi-person"></i></span>
                        <strong>Free Press Journal</strong>
                        <span class="movie-review-score"><i class="bi bi-star-fill"></i> 7/10</span>
                    </div>
                    <h4 id="movieReviewTitle">Movie Review</h4>
                    <p id="movieReviewText">A strong cinematic experience with memorable performances, engaging visuals and a story built for the big screen.</p>
                    <div class="movie-review-actions"><button type="button"><i class="bi bi-hand-thumbs-up"></i></button><button type="button"><i class="bi bi-hand-thumbs-down"></i></button><button type="button" onclick="shareSelectedMovie()"><i class="bi bi-share"></i></button></div>
                </article>
            </div>

            <div class="movie-related-section">
                <div class="movie-details-section-heading">
                    <h3>You might also like</h3>
                    <span>View All <i class="bi bi-chevron-right"></i></span>
                </div>
                <div class="movie-related-row" id="movieRelatedRow"></div>
            </div>
        </div>
    </section>
</div>


<!-- PREMIUM LOCATION MODAL -->
<div class="modal fade location-modal" id="locationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            
            <!-- SEARCH & DETECT LOCATION SECTION -->
            <div class="location-search-section">
                <div class="location-search-box">
                    <i class="bi bi-search location-search-icon"></i>
                    <input type="text" id="citySearchInput" class="location-search-input" placeholder="Search for your city" onkeyup="searchCities()">
                </div>
                
                <button id="detectLocationBtn" class="detect-location-btn" onclick="detectLocation(); return false;">
                    <span class="detect-location-icon"><i class="bi bi-crosshair"></i></span>
                    <span id="detectLocationText">Detect my location</span>
                </button>
                <div id="locationStatus" class="location-status" style="display: none;"></div>
            </div>

            <!-- SCROLLABLE BODY CONTAINER -->
            <div class="modal-scrollable-body">
                
                <!-- POPULAR CITIES -->
                <div class="popular-cities-section text-center">
                    <div class="location-section-title">
                        <h6>Popular Cities</h6>
                    </div>
                    <div id="initialCities" class="popular-cities-grid"></div>
                </div>

                <!-- VIEW ALL CITIES BUTTON -->
                <div class="text-center my-3">
                    <a href="#" id="viewAllCitiesBtn" class="city-action-btn" onclick="showAllCities(); return false;">View All Cities</a>
                </div>

                <!-- EXPANDABLE A-Z CITIES SECTION -->
                <div id="allCitiesList" class="all-cities-wrapper" style="display: none;">
                    <div class="location-section-title text-center my-3">
                        <h6>Other Cities</h6>
                    </div>
                    
                    <!-- 5-Column Grid Container -->
                    <div id="allCities" class="all-cities-grid"></div>
                    
                    <!-- HIDE ALL CITIES BUTTON -->
                    <div class="text-center my-4">
                        <a href="#" id="hideAllCitiesBtn" class="city-action-btn" onclick="hideAllCities(); return false;" style="display: none;">Hide all cities</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


    <!-- =========================================================
         JAVASCRIPT
         ========================================================= -->

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- Google Sign-In -->
    <script src="https://accounts.google.com/gsi/client"
            async
            defer>
    </script>


    <!-- Custom JavaScript -->
    <script src="assets_1/js/script.js"></script>

    <script src="assets_1/js/static-login.js"></script>
    <script src="assets_1/js/static-location.js"></script>
    <script src="assets_1/js/visual-effects.js"></script>

    <!-- =========================================================
     PAGE INTERACTION FALLBACKS & TELUGU MOVIES FUNCTIONALITY
     ========================================================= -->
<script>
(function () {
    'use strict';

    let teluguSwiperInstance = null;
    let selectedMovieId = null;

    // Full Movie Database
    const movieData = {
        'avengers': {
            title: 'Avengers Endgame',
            image: 'assets_1/images/movies/Avengers-end-game.jfif',
            rating: '9.2/10',
            votes: '210K+ Votes',
            meta: '3h 01m  •  Action, Adventure, Sci-Fi  •  UA  •  English',
            tags: ['2D', '3D', 'IMAX', 'English', 'Hindi'],
            story: 'After the devastating events of Infinity War, the remaining Avengers unite for one final mission. They must find a way to reverse the damage, face impossible choices and fight for the future of their world.',
            cast: [['Robert Downey Jr.', 'Actor', 'assets_1/images/profile/cast1.jpg'], ['Chris Evans', 'Actor', 'assets_1/images/cast/cast2.jpg'], ['Scarlett Johansson', 'Actress', 'assets_1/images/cast/cast3.jpg'], ['Tom Holland', 'Actor', 'assets_1/images/cast/cast4.jpg']],
            crew: [['Anthony Russo', 'Director', 'assets_1/images/profile/cast1.jpg'], ['Joe Russo', 'Director', 'assets_1/images/cast/cast2.jpg'], ['Kevin Feige', 'Producer', 'assets_1/images/cast/cast3.jpg']],
            review: 'A massive superhero spectacle that balances action, emotion and character moments with a satisfying big-screen payoff.'
        },
        'mission-impossible': {
            title: 'Mission Impossible',
            image: 'assets_1/images/movies/Mission-impossible-movie.jpg',
            rating: '8.8/10',
            votes: '180K+ Votes',
            meta: '2h 40m  •  Action, Thriller  •  UA  •  English',
            tags: ['IMAX', '4DX', 'English', 'Hindi'],
            story: 'A highly trained agent faces a dangerous mission where every decision carries a consequence. With time running out, the team must rely on trust, skill and courage to prevent a global threat.',
            cast: [['Tom Cruise', 'Actor', 'assets_1/images/profile/tom-cruise.avif'], ['Hayley Atwell', 'Actress', 'assets_1/images/profile/hayley-atwell.avif'], ['Ving Rhames', 'Actor', 'assets_1/images/profile/ving-rhames.avif'], ['Simon Pegg', 'Actor', 'assets_1/images/profile/simon-pegg.avif'], ['Rebecca Ferguson', 'Actress', 'assets_1/images/profile/rebecca-ferguson.avif'], ['Vanessa Kirby', 'Actress', 'assets_1/images/profile/vanessa-kirby.avif'], ['Esai Morales', 'Actor', 'assets_1/images/profile/esai-morales.avif'], ['Pom Klementieff', 'Actress', 'assets_1/images/profile/pom-klementieff.avif'], ['Henry Czerny', 'Actor', 'assets_1/images/profile/henry-czerny.avif'], ['Shea Whigham', 'Actor', 'assets_1/images/profile/shea-whigham.avif'], ['Rob Delaney', 'Actor', 'assets_1/images/profile/rob-delaney.avif'], ['Cary Elwes', 'Actor', 'assets_1/images/profile/cary-elwes.avif'], ['Indira Varma', 'Actress', 'assets_1/images/profile/indira-varma.avif'], ['Mark Gatiss', 'Actor', 'assets_1/images/profile/mark-gatiss.avif']],
            crew: [['Christopher McQuarrie', 'Director / Producer / Writer', 'assets_1/images/profile/christopher-mcquarrie-director-producer-writer.avif'], ['Tom Cruise', 'Producer', 'assets_1/images/profile/tom-cruise.avif'], ['Bruce Geller', 'Writer', 'assets_1/images/profile/bruce-geller-writer.avif'], ['Lorne Balfe', 'Musician', 'assets_1/images/profile/lorne-balfe-Musician.avif'], ['Bradley J. Fischer', 'Executive Producer', 'assets_1/images/profile/bradley-j-fischer-Executive-producer.avif'], ['Dana Goldberg', 'Executive Producer', 'assets_1/images/profile/dana-goldberg-Executive-producer.avif'], ['Don Granger', 'Executive Producer', 'assets_1/images/profile/don-granger-executive-producer.avif'], ['David Ellison', 'Executive Producer', 'assets_1/images/profile/david-ellison-executive-producer.avif'], ['Eddie Hamilton', 'Editor', 'assets_1/images/profile/eddie-hamilton-editor.avif'], ['Jill Taylor', 'Costume Designer', 'assets_1/images/profile/jill-taylor-costume-designer.avif']],
            review: 'Fast, stylish and packed with practical action, this is the kind of movie designed to be experienced in a theatre.'
        },
        'avatar': {
            title: 'Avatar',
            image: 'assets_1/images/movies/Avatar-The-Way-of-Water-2022.webp',
            rating: '9.0/10',
            votes: '195K+ Votes',
            meta: '2h 52m  •  Adventure, Fantasy  •  UA  •  English',
            tags: ['3D', 'IMAX', 'English', 'Hindi'],
            story: 'A journey into a spectacular world filled with extraordinary landscapes, powerful relationships and a conflict that changes the fate of an entire people.',
            cast: [['Sam Worthington', 'Actor', 'assets_1/images/profile/sam-worthington.avif'], ['Zoe Saldana', 'Actress', 'assets_1/images/profile/zoe-saldana.avif'], ['Sigourney Weaver', 'Actress', 'assets_1/images/profile/sigourney-weaver.avif'], ['Stephen Lang', 'Actor', 'assets_1/images/profile/stephen-lang.avif'], ['Cliff Curtis', 'Actor', 'assets_1/images/profile/cliff-curtis.avif'], ['Joel David Moore', 'Actor', 'assets_1/images/profile/joel-david-moore.avif'], ['CCH Pounder', 'Actress', 'assets_1/images/profile/cch-pounder.avif'], ['Edie Falco', 'Actress', 'assets_1/images/profile/edie-falco.avif'], ['Jemaine Clement', 'Actor', 'assets_1/images/profile/jemaine-clement.avif'], ['Giovanni Ribisi', 'Actor', 'assets_1/images/profile/giovanni-ribisi.avif'], ['Kate Winslet', 'Actress', 'assets_1/images/profile/kate-winslet.avif']],
            crew: [['James Cameron', 'Director / Writer', 'assets_1/images/profile/james-cameron-director-writer.avif'], ['Rick Jaffa', 'Writer', 'assets_1/images/profile/rick-jaffa-writer.avif'], ['Amanda Silver', 'Writer', 'assets_1/images/profile/amanda-silver-writer.avif']],
            review: 'Visually ambitious and immersive, Avatar continues to stand out for its world-building and theatrical scale.'
        },
        'spider-man': {
            title: 'Spider-Man',
            image: 'assets_1/images/movies/spiderman-noway-home-movie.jpg',
            rating: '8.9/10',
            votes: '175K+ Votes',
            meta: '2h 28m  •  Action, Super Hero  •  UA  •  English',
            tags: ['4DX', 'IMAX', 'English', 'Hindi'],
            story: 'A young hero balances everyday life with the responsibility of protecting his city. New challenges force him to discover what being a hero truly means.',
            cast: [['Tom Holland', 'Actor', 'assets_1/images/profile/tom-holland.png'], ['Zendaya', 'Actress', 'assets_1/images/profile/zendaya.png'], ['Jacob Batalon', 'Actor', 'assets_1/images/profile/jacob-batalon.png']],
            crew: [['Jon Watts', 'Director', 'assets_1/images/profile/cast1.jpg'], ['Kevin Feige', 'Producer', 'assets_1/images/profile/cast3.jpg']],
            review: 'A fun, energetic superhero adventure with heart, humour and plenty of crowd-pleasing action.'
        },
        'batman': {
            title: 'The Batman',
            image: 'assets_1/images/movies/the-batman-movie.avif',
            rating: '9.1/10',
            votes: '205K+ Votes',
            meta: '2h 56m  •  Action, Crime, Drama  •  UA  •  English',
            tags: ['IMAX', '2D', 'English', 'Hindi'],
            story: 'A mysterious crime pushes Batman deeper into Gotham’s underworld. As he follows a trail of clues, he discovers how corruption connects powerful figures across the city.',
            cast: [['Robert Pattinson', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Zoë Kravitz', 'Actress', 'assets_1/images/cast/cast2.jpg'], ['Jeffrey Wright', 'Actor', 'assets_1/images/cast/cast3.jpg']],
            crew: [['Matt Reeves', 'Director', 'assets_1/images/cast/cast4.jpg'], ['Dylan Clark', 'Producer', 'assets_1/images/cast/cast1.jpg']],
            review: 'A dark, atmospheric detective story that gives the superhero genre a grounded and intense identity.'
        },
        'jurassic-world': {
            title: 'Jurassic World',
            image: 'assets_1/images/movies/latest1.jpg',
            rating: '9.1/10',
            votes: '160K+ Votes',
            meta: '2h 20m  •  Adventure, Sci-Fi  •  UA  •  English',
            tags: ['3D', 'IMAX', 'English'],
            story: 'A new chapter of the Jurassic adventure brings humans and dinosaurs into an unpredictable world where survival depends on courage and quick decisions.',
            cast: [['Chris Pratt', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Bryce Dallas Howard', 'Actress', 'assets_1/images/cast/cast2.jpg']],
            crew: [['Colin Trevorrow', 'Director', 'assets_1/images/cast/cast4.jpg']],
            review: 'A thrilling dinosaur adventure with spectacle, suspense and family-friendly entertainment.'
        },
        'captain-america': {
            title: 'Captain America',
            image: 'assets_1/images/movies/latest2.jpg',
            rating: '8.8/10',
            votes: '145K+ Votes',
            meta: '2h 18m  •  Action, Super Hero  •  UA  •  English',
            tags: ['2D', 'IMAX', 'English'],
            story: 'A new mission tests a hero’s values and leadership as he confronts threats from both outside and within the system.',
            cast: [['Anthony Mackie', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Harrison Ford', 'Actor', 'assets_1/images/cast/cast2.jpg']],
            crew: [['Julius Onah', 'Director', 'assets_1/images/cast/cast4.jpg']],
            review: 'A solid superhero action film driven by character, responsibility and large-scale set pieces.'
        },
        'superman': {
            title: 'Superman',
            image: 'assets_1/images/movies/latest3.jpg',
            rating: '9.4/10',
            votes: '220K+ Votes',
            meta: '2h 10m  •  Action, Adventure  •  UA  •  English',
            tags: ['IMAX', '4DX', 'English'],
            story: 'A hopeful hero discovers that extraordinary power comes with extraordinary responsibility while protecting a world that is still learning to trust him.',
            cast: [['David Corenswet', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Rachel Brosnahan', 'Actress', 'assets_1/images/cast/cast2.jpg']],
            crew: [['James Gunn', 'Director', 'assets_1/images/cast/cast4.jpg']],
            review: 'A bright and character-focused superhero adventure built around optimism, courage and spectacle.'
        },
        'the-batman': {
            title: 'The Batman',
            image: 'assets_1/images/movies/the-batman-movie.avif',
            rating: '9.0/10',
            votes: '190K+ Votes',
            meta: '2h 56m  •  Action, Crime, Drama  •  UA  •  English',
            tags: ['IMAX', '2D', 'English'],
            story: 'Gotham faces another dangerous mystery as its masked protector follows a trail that reveals deeper secrets beneath the city.',
            cast: [['Robert Pattinson', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Paul Dano', 'Actor', 'assets_1/images/cast/cast2.jpg']],
            crew: [['Matt Reeves', 'Director', 'assets_1/images/cast/cast4.jpg']],
            review: 'A gripping comic-book crime drama with strong atmosphere and detective-driven storytelling.'
        },
        'dune': {
            title: 'Dune',
            image: 'assets_1/images/movies/latest5.jpg',
            rating: '9.3/10',
            votes: '185K+ Votes',
            meta: '2h 46m  •  Sci-Fi, Drama  •  UA  •  English',
            tags: ['IMAX', 'Dolby Cinema', 'English'],
            story: 'On a distant desert world, a young heir is drawn into a dangerous struggle involving power, prophecy and the future of an entire civilisation.',
            cast: [['Timothée Chalamet', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Zendaya', 'Actress', 'assets_1/images/cast/cast2.jpg']],
            crew: [['Denis Villeneuve', 'Director', 'assets_1/images/cast/cast4.jpg']],
            review: 'Epic science fiction with extraordinary production design, sound and world-building.'
        },
        'pushpa-2': {
            title: 'Pushpa 2: The Rule',
            image: 'assets_1/images/movies/pushpa-2-movie.jpg',
            rating: '9.4/10',
            votes: '350K+ Votes',
            meta: '3h 20m  •  Action, Drama  •  UA16+  •  Telugu',
            tags: ['2D', '3D', 'IMAX 2D', 'Telugu', 'Hindi', 'Tamil'],
            story: 'Pushpa Raj expands his red sandalwood empire while facing unrelenting opposition from SP Bhanwar Singh Shekhawat in a high-stakes battle for dominance.',
            cast: [['Allu Arjun', 'Actor', 'assets_1/images/profile/pushpa-2.png'], ['Rashmika Mandanna', 'Actress', 'assets_1/images/cast/cast2.jpg'], ['Fahadh Faasil', 'Actor', 'assets_1/images/cast/cast3.jpg']],
            crew: [['Sukumar', 'Director', 'assets_1/images/cast/cast4.jpg'], ['DSP', 'Music Director', 'assets_1/images/cast/cast1.jpg']],
            review: 'An explosive mass entertainer with powerful performances and high-voltage action sequences.'
        },
        'devara': {
            title: 'Devara Part 1',
            image: 'assets_1/images/movies/devara-1-movie.webp',
            rating: '9.1/10',
            votes: '240K+ Votes',
            meta: '2h 58m  •  Action, Thriller  •  UA  •  Telugu',
            tags: ['2D', 'IMAX 2D', 'Telugu', 'Hindi'],
            story: 'An epic action saga set against coastal lands, telling the story of a fearless man who rises up to protect his people from coastal crime networks.',
            cast: [['NTR Jr.', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Janhvi Kapoor', 'Actress', 'assets_1/images/cast/cast2.jpg'], ['Saif Ali Khan', 'Actor', 'assets_1/images/cast/cast3.jpg']],
            crew: [['Koratala Siva', 'Director', 'assets_1/images/cast/cast4.jpg'], ['Anirudh Ravichander', 'Music', 'assets_1/images/cast/cast1.jpg']],
            review: 'NTR delivers a fierce performance backed by Anirudh\'s thrilling background score.'
        },
        'tillu-square': {
            title: 'Tillu Square',
            image: 'assets_1/images/movies/Tillu-square-movie.jpg',
            rating: '8.7/10',
            votes: '110K+ Votes',
            meta: '2h 05m  •  Comedy, Crime, Romance  •  UA  •  Telugu',
            tags: ['2D', 'Telugu'],
            story: 'DJ Tillu finds himself tangled in another bizarre mystery when an enigmatic woman enters his life, leading to endless hilarious mix-ups.',
            cast: [['Siddhu Jonnalagadda', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Anupama Parameswaran', 'Actress', 'assets_1/images/cast/cast2.jpg']],
            crew: [['Mallik Ram', 'Director', 'assets_1/images/cast/cast4.jpg']],
            review: 'Non-stop laugh riot packed with witty dialogues and Siddhu\'s energetic screen presence.'
        },
        'virupaksha': {
            title: 'Virupaksha',
            image: 'assets_1/images/movies/veerupaksha-movie.jfif',
            rating: '8.9/10',
            votes: '95K+ Votes',
            meta: '2h 25m  •  Horror, Mystery, Thriller  •  UA  •  Telugu',
            tags: ['2D', 'Telugu'],
            story: 'Mysterious deaths occur in a remote village due to an ancient occult curse. A young man uncovers dark secrets to save the village before time runs out.',
            cast: [['Sai Durgha Tej', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Samyuktha Menon', 'Actress', 'assets_1/images/cast/cast2.jpg']],
            crew: [['Karthik Varma Dandu', 'Director', 'assets_1/images/cast/cast4.jpg']],
            review: 'A genuinely gripping occult horror mystery with brilliant sound design and atmospheric tension.'
        },
        'game-changer': {
            title: 'Game Changer',
            image: 'assets_1/images/movies/ram-charan-game-changer-new-poster.avif',
            rating: '9.0/10',
            votes: '180K+ Votes',
            meta: '2h 50m  •  Action, Drama  •  UA  •  Telugu',
            tags: ['2D', 'IMAX', 'Telugu', 'Hindi'],
            story: 'An honest IAS officer takes on electoral corruption and political syndicates to reform the governance system.',
            cast: [['Ram Charan', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Kiara Advani', 'Actress', 'assets_1/images/cast/cast2.jpg']],
            crew: [['Shankar', 'Director', 'assets_1/images/cast/cast4.jpg'], ['Thaman S', 'Music', 'assets_1/images/cast/cast1.jpg']],
            review: 'A classic Shankar political drama combined with Ram Charan\'s impactful dual roles.'
        },
        'kalki-2898': {
            title: 'Kalki 2898 AD',
            image: 'assets_1/images/movies/kalki.webp',
            rating: '9.3/10',
            votes: '310K+ Votes',
            meta: '3h 01m  •  Sci-Fi, Action, Fantasy  •  UA  •  Telugu',
            tags: ['3D', 'IMAX 3D', 'EPIQ', 'Telugu', 'Hindi'],
            story: 'A modern avatar of Vishnu descends to Earth in a dystopian post-apocalyptic future to protect the world from dark forces.',
            cast: [['Prabhas', 'Actor', 'assets_1/images/cast/cast1.jpg'], ['Amitabh Bachchan', 'Actor', 'assets_1/images/cast/cast2.jpg'], ['Kamal Haasan', 'Actor', 'assets_1/images/cast/cast3.jpg']],
            crew: [['Nag Ashwin', 'Director', 'assets_1/images/cast/cast4.jpg'], ['Santhosh Narayanan', 'Music', 'assets_1/images/cast/cast1.jpg']],
            review: 'A visionary sci-fi epic blending Indian mythology with futuristic world-building.'
        }
    };

    // Filter Movies by Genre Pill
    window.filterLanguageMovies = function (genre, btnElement) {
        const buttons = btnElement.parentElement.querySelectorAll('button');
        buttons.forEach(btn => btn.classList.remove('active'));
        btnElement.classList.add('active');

        const slides = document.querySelectorAll('#teluguMovies .movie-genre-item');
        slides.forEach(slide => {
            const slideGenres = slide.getAttribute('data-genre') || '';
            if (genre === 'all' || slideGenres.includes(genre)) {
                slide.style.display = 'block';
            } else {
                slide.style.display = 'none';
            }
        });

        if (teluguSwiperInstance && typeof teluguSwiperInstance.update === 'function') {
            teluguSwiperInstance.update();
            teluguSwiperInstance.slideTo(0);
        }
    };

    window.openSideMenu = function () {
        const menu = document.getElementById('movieSideMenu');
        const overlay = document.getElementById('movieMenuOverlay');
        if (!menu || !overlay) return;
        menu.classList.add('is-open');
        overlay.classList.add('is-visible');
        document.body.classList.add('menu-open');
    };

    window.closeSideMenu = function () {
        const menu = document.getElementById('movieSideMenu');
        const overlay = document.getElementById('movieMenuOverlay');
        if (menu) menu.classList.remove('is-open');
        if (overlay) overlay.classList.remove('is-visible');
        document.body.classList.remove('menu-open');
    };

    window.openLoginModal = function () {
        closeSideMenu();
        const popup = document.getElementById('loginPopup');
        if (popup) { popup.classList.add('active', 'show'); popup.style.display = 'flex'; document.body.classList.add('modal-open-custom'); }
    };

    window.closeLoginModal = function () {
        const popup = document.getElementById('loginPopup');
        if (popup) { popup.classList.remove('active', 'show'); popup.style.display = 'none'; }
        document.body.classList.remove('modal-open-custom');
    };

    window.openLocationModal = function () {
        const el = document.getElementById('locationModal');
        if (!el || !window.bootstrap) return;
        const modal = bootstrap.Modal.getOrCreateInstance(el);
        modal.show();
        if (typeof window.showInitialCities === 'function') window.showInitialCities();
    };

    window.openMovieDetails = function (id) {
        const movie = movieData[id];
        if (!movie) return;
        selectedMovieId = id;
        const overlay = document.getElementById('movieDetailsOverlay');
        if (!overlay) return;

        document.getElementById('movieDetailsTitle').textContent = movie.title;
        document.getElementById('movieDetailsRating').textContent = movie.rating;
        document.getElementById('movieDetailsVotes').textContent = movie.votes;
        document.getElementById('movieDetailsMeta').textContent = movie.meta;
        document.getElementById('movieDetailsStory').textContent = movie.story;
        document.getElementById('movieReviewTitle').textContent = movie.title;
        document.getElementById('movieReviewText').textContent = movie.review;
        document.getElementById('movieDetailsPoster').src = movie.image;
        document.getElementById('movieDetailsBackdrop').src = movie.image;
        document.getElementById('movieDetailsPoster').alt = movie.title;
        document.getElementById('movieDetailsBackdrop').alt = movie.title;
        document.getElementById('movieDetailsTags').innerHTML = movie.tags.map(tag => `<span>${tag}</span>`).join('');
        renderPeople('movieCastRow', movie.cast);
        renderPeople('movieCrewRow', movie.crew);
        renderRelated(id);

        overlay.classList.add('is-open');
        overlay.setAttribute('aria-hidden', 'false');
        document.body.classList.add('movie-details-open');
        const panel = document.getElementById('movieDetailsPanel');
        if (panel) panel.scrollTop = 0;
    };

    function renderPeople(targetId, people) {
        const row = document.getElementById(targetId);
        if (!row) return;
        row.innerHTML = people.map(person => `<article class="movie-person-card"><img src="${person[2]}" alt="${person[0]}" onerror="this.src='https://via.placeholder.com/150x180?text=Photo'"><h4>${person[0]}</h4><p>${person[1]}</p></article>`).join('');
    }

    function renderRelated(activeId) {
        const row = document.getElementById('movieRelatedRow');
        if (!row) return;
        const related = Object.keys(movieData).filter(id => id !== activeId).slice(0, 4);
        row.innerHTML = related.map(id => `<button type="button" class="movie-related-card" onclick="openMovieDetails('${id}')"><img src="${movieData[id].image}" alt="${movieData[id].title}"><strong>${movieData[id].title}</strong><span>${movieData[id].rating}</span></button>`).join('');
    }

    window.closeMovieDetails = function () {
        const overlay = document.getElementById('movieDetailsOverlay');
        if (!overlay) return;
        overlay.classList.remove('is-open');
        overlay.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('movie-details-open');
        selectedMovieId = null;
    };

    window.bookSelectedMovie = function () {
        if (!selectedMovieId) return;
        const movie = movieData[selectedMovieId];
        alert('Booking flow for ' + movie.title + ' is ready to connect to your booking page.');
    };

    window.shareSelectedMovie = async function () {
        if (!selectedMovieId) return;
        const movie = movieData[selectedMovieId];
        const shareData = { title: movie.title, text: 'Check out ' + movie.title + ' on Sairam Movie Hub.', url: window.location.href };
        try {
            if (navigator.share) await navigator.share(shareData);
            else if (navigator.clipboard) { await navigator.clipboard.writeText(window.location.href); alert('Movie link copied.'); }
        } catch (e) { }
    };

    window.scrollMovieRow = function (id) {
        const row = document.getElementById(id);
        if (row) row.scrollBy({ left: Math.max(260, row.clientWidth * .7), behavior: 'smooth' });
    };

    function attachMovieClicks() {
        document.querySelectorAll('.movie-card-clickable').forEach(card => {
            if (card.dataset.movieClickBound) return;
            card.dataset.movieClickBound = '1';
            card.addEventListener('click', function (e) {
                if (e.target.closest('a,button')) return;
                openMovieDetails(card.dataset.movieId);
            });
            card.addEventListener('keydown', function (e) {
                if ((e.key === 'Enter' || e.key === ' ') && !e.target.closest('a,button')) {
                    e.preventDefault();
                    openMovieDetails(card.dataset.movieId);
                }
            });
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        attachMovieClicks();

        // Safely initialize Swiper for Telugu Movies section with Auto-swiping & Capsule Pagination
        if (typeof Swiper !== 'undefined' && document.querySelector('.teluguMoviesSwiper')) {
            teluguSwiperInstance = new Swiper('.teluguMoviesSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: '#teluguMovies .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '#teluguMovies .swiper-button-next',
                    prevEl: '#teluguMovies .swiper-button-prev',
                },
                breakpoints: {
                    576: { slidesPerView: 2, spaceBetween: 20 },
                    768: { slidesPerView: 3, spaceBetween: 20 },
                    992: { slidesPerView: 4, spaceBetween: 24 },
                    1200: { slidesPerView: 5, spaceBetween: 24 },
                }
            });
        }

        const closeLogin = document.getElementById('closePopup');
        if (closeLogin) closeLogin.addEventListener('click', closeLoginModal);
        const loginPopup = document.getElementById('loginPopup');
        if (loginPopup) loginPopup.addEventListener('click', e => { if (e.target === loginPopup) closeLoginModal(); });

        const clearSearch = document.getElementById('locationSearchClear');
        const citySearch = document.getElementById('citySearchInput');
        if (clearSearch && citySearch) clearSearch.addEventListener('click', () => { citySearch.value = ''; if (typeof window.searchCities === 'function') window.searchCities(); citySearch.focus(); });

        const savedCity = localStorage.getItem('selectedCity');
        if (savedCity) {
            const display = document.getElementById('currentLocationDisplay');
            if (display) display.textContent = savedCity;
        }

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') { closeSideMenu(); closeMovieDetails(); closeLoginModal(); }
        });
    });

    window.setTimeout(attachMovieClicks, 700);
})();
</script>

<?php include 'chatbot.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>
