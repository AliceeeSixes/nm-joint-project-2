document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.getElementById('navbarHamburger');
  const sidebarContainer = document.getElementById('sidebarContainer');
  const sidebarClose = document.getElementById('sidebarClose');
  const sidebarOverlay = document.getElementById('sidebarOverlay');
  const body = document.body;

  function openSidebar() {
    sidebarContainer.classList.add('sidebar-container--open');
    body.classList.add('no-scroll');
    hamburger.setAttribute('aria-expanded', 'true');
  }

  function closeSidebar() {
    sidebarContainer.classList.remove('sidebar-container--open');
    body.classList.remove('no-scroll');
    hamburger.setAttribute('aria-expanded', 'false');
  }

  if (hamburger && sidebarContainer) {
    hamburger.addEventListener('click', openSidebar);
    
    if (sidebarClose) {
      sidebarClose.addEventListener('click', closeSidebar);
    }
    
    if (sidebarOverlay) {
      sidebarOverlay.addEventListener('click', closeSidebar);
    }
    
    // Close sidebar when pressing Escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && sidebarContainer.classList.contains('sidebar-container--open')) {
        closeSidebar();
      }
    });
  }
}); 


// === Slick carousel init === //

// Testimonials //
$("#testimonials-carousel").slick({
  autoplay: true,
  autoplaySpeed: 5000,
  arrows: false,
  dots: true,
});

// Hero Slider //
$('.hero-slider-container').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 5000,
  arrows: true,
  prevArrow: $('.hero-slider-prev'),
  nextArrow: $('.hero-slider-next'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false
      }
    }
  ]
});

// Add other carousel code here