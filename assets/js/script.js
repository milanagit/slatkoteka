console.log('Hello from js');

//  Menu toggle button on mobile
const togglerNavbarBtn = document.querySelector('.st-toggler--navbar-btn');
const navBarHeader = document.querySelector('.st-navbar-container');
let menuOpen = false;

togglerNavbarBtn.addEventListener('click', () => {
    if(!menuOpen) {
        togglerNavbarBtn.classList.add('open');
        navBarHeader.classList.add('show');
        menuOpen = true;
    } else {
        togglerNavbarBtn.classList.remove('open');
        navBarHeader.classList.remove('show');
        menuOpen = false;
    }
});