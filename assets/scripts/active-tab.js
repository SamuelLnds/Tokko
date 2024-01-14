document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('header .logo, nav ul li a');
    const currentPath = window.location.pathname;
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active-tab');
        } else {
            link.classList.remove('active-tab');
        }
    });
});
