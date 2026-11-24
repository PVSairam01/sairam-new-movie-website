<?php $sairamPage = basename($_SERVER['PHP_SELF'] ?? 'index.php'); ?>
<link rel="stylesheet" href="assets_1/css/sairam-shell.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<header class="sairam-site-header">


    <!-- Original header SVG: <svg class="bc-logo-svg" viewBox="0 0 660 285"><use href="#bc-logo"></use></svg> -->
    <a href="index.php" class="logo-brand-wrapper" aria-label="Sairam Movie Hub"><img class="bc-white-logo-svg" src="assets_1/images/movies/sairam-movie-logo-removebg-preview.png" alt="Sairam Movie Hub"></a>

<nav id="siteNav">
      <a href="index.php" data-section="home" class="<?= $sairamPage === 'index.php' ? 'is-current' : '' ?>" <?= $sairamPage === 'index.php' ? 'aria-current="page"' : '' ?>>Home</a>
      <a href="index.php#about" data-section="about">About Us</a>
      <a href="latest-movies.php" data-section="services" class="<?= $sairamPage === 'latest-movies.php' ? 'is-current' : '' ?>" <?= $sairamPage === 'latest-movies.php' ? 'aria-current="page"' : '' ?>>Movies</a>
      <!-- Services submenu disabled as requested:
      <ul class="sub-menu">
        <li><a href="latest-movies.php">Movies</a></li>
        <li><a href="#work">Trailers</a></li>
      </ul>
      -->
      <a href="latest-trailers.php" data-section="portfolio" class="<?= strpos($sairamPage, 'latest-trailers') === 0 ? 'is-current' : '' ?>" <?= strpos($sairamPage, 'latest-trailers') === 0 ? 'aria-current="page"' : '' ?>>Trailers</a>
      <a href="https://sairam-portfolio-beryl.vercel.app/">Portfolio</a>
      <a href="booking.php" data-section="packages">Book Tickets</a>
      <a href="index.php#cta" data-section="contact">Contact</a>
    </nav>

    <!-- <a href="#cta" class="btn">Book Tickets <b>→</b></a> -->
    <a href="booking.php" class="btn" aria-label="Book Tickets"><span class="bt"><span>Book Tickets</span><span aria-hidden="true">Book Tickets</span></span><b aria-hidden="true">→</b></a>

    <button type="button" class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false" aria-controls="siteNav" onclick="var nav=document.getElementById('siteNav');var open=this.closest('header').classList.toggle('open');nav.classList.toggle('is-open',open);this.setAttribute('aria-expanded',open)"><span></span><span></span><span></span></button>

  </header>
<script>
(function(){
  function init(){
    var nav=document.getElementById('siteNav');
    if(!nav)return;
    var links=[].slice.call(nav.querySelectorAll('[data-section]'));
    var targets={
      home:document.querySelector('.index_first_section'),
      about:document.getElementById('about'),
      services:document.getElementById('brands'),
      portfolio:document.getElementById('portfolio'),
      packages:document.getElementById('packages'),
      contact:document.getElementById('cta')
    };
    var isWorksPage=/\/our_works\.php$/i.test(window.location.pathname);
    if(isWorksPage){
      var destinations={home:'index.php',about:'index.php#about',services:'index.php#brands',portfolio:'our_works.php',packages:'index.php#packages',contact:'index.php#cta'};
      links.forEach(function(link){link.href=destinations[link.dataset.section]||link.href});
    }
    function activate(key){
      links.forEach(function(link){
        var active=link.dataset.section===key;
        link.classList.toggle('is-current',active);
        if(active)link.setAttribute('aria-current','location');
        else link.removeAttribute('aria-current');
      });
    }
    if(isWorksPage){activate('portfolio');return}
    if('IntersectionObserver' in window){
      var observer=new IntersectionObserver(function(entries){
        entries.forEach(function(entry){if(entry.isIntersecting)activate(entry.target.dataset.navSection)});
      },{rootMargin:'-25% 0px -65% 0px',threshold:0});
      Object.keys(targets).forEach(function(key){
        if(targets[key]){targets[key].dataset.navSection=key;observer.observe(targets[key])}
      });
    }
    links.forEach(function(link){link.addEventListener('click',function(){activate(link.dataset.section)})});
  }
  if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',init,{once:true});
  else init();
})();
</script>
