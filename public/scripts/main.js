window.onload = function () {    
    let path = window.location.pathname;
    let desktopNavlinks = document.querySelectorAll('a.desktop-nav-link');
    let sidebarNavlinks = document.querySelectorAll('a.sidebar-nav-link');

    const pathArr = path.split('/');
    const pathLastSegment = pathArr.pop();

    desktopNavlinks.forEach(function (navlink) {
        if (navlink.getAttribute('href') === pathLastSegment) {
            navlink.classList.add('active');
        }
    });
    
    sidebarNavlinks.forEach(function (navlink) {
        if (navlink.getAttribute('href') === pathLastSegment) {
            navlink.classList.add('active');
        }
    });
};
