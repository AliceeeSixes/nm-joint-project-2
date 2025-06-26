document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.getElementById('navbarHamburger');
  const sidebar = document.getElementById('navbarSidebar');
  const body = document.body;

  if (hamburger && sidebar) {
    hamburger.addEventListener('click', function() {
      sidebar.classList.toggle('navbar__sidebar--open');
      body.classList.toggle('no-scroll');
      const isOpen = sidebar.classList.contains('navbar__sidebar--open');
      hamburger.setAttribute('aria-expanded', isOpen);
    });
  }
}); 