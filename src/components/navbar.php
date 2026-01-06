<nav id="main-navbar" class="navbar navbar-dark bg-black px-3" aria-label="Main Navigation">
    <div class="container-fluid main-navbar-container px-2">
        <!-- nav left side start -->
        <div class="position-relative d-flex align-items-center left-side">
            <p
                class="position-absolute top-50 start-100 translate-middle-y m-0 mx-2 p-0 pt-3 text-white text-center text-nowrap fw-semibold fs-1 katibeh-regular">
                L'Asso
            </p>
        </div>
        <!-- nav left side end -->

        <!-- nav right side start -->
        <div id="right-side" class="d-flex flex-row text-white right-side">
            <ul class="d-flex flex-row gap-3 navbar-nav custom-navbar-nav fs-4">
                <li class="nav-item custom-nav-item">
                    <a href="home" class="nav-link desktop-nav-link" aria-current="page">
                        <img class="icon header-icon" src="images/icon/homeIcon.png" alt="accueil">
                        <span class="ms-1">Accueil</span>
                    </a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a href="news" class="nav-link desktop-nav-link" aria-current="page">
                        <img class="icon" src="images/icon/newsIcon.png" alt="actualités" width="38px">
                        <span>Actualités</span>
                    </a>
                </li>
            </ul>

            <button id="desktop__sidebar-trigger" class="navbar-toggler p-1 ms-3 my-2" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <a class="nav-link custom-nav-item" aria-current="page">
                    <span>Plus</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-plus-lg" viewBox="0 0 16 16" style="vertical-align: -.125em;">
                        <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg>
                </a>
            </button>

            <button id="sidebar-trigger" class="navbar-toggler p-1 my-1" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
        </div>
        <!-- nav right side end -->
    </div>
</nav>