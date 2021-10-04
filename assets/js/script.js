console.log('Hello from js');

//  Menu toggle button on mobile - animate toggle btn, open and close navigation menu, body freez from scrolling
const togglerNavbarBtn = document.querySelector('.st-toggler--navbar-btn');
const navBarHeader = document.querySelector('.st-navbar-container');
const body = document.querySelector('body');
let menuOpen = false;

togglerNavbarBtn.addEventListener('click', () => {
    if(!menuOpen) {
        togglerNavbarBtn.classList.add('open');
        navBarHeader.classList.add('show');
        body.classList.add('no-scroll');
        menuOpen = true;
    } else {
        togglerNavbarBtn.classList.remove('open');
        navBarHeader.classList.remove('show');
        body.classList.remove('no-scroll');
        menuOpen = false;
    }
});