@include('backend.header');

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="{{ asset('backend/img/') }}" alt="">
                <span class="d-none d-lg-block">SatConBD</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-images"></i>
                    <span>Blog Post</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-gem"></i>
                    <span>Lead Data</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Contact Us</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('profle.update') }}">
                    <i class="bi bi-person"></i>
                    <span>User Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
    <!-- End Sidebar-->

    {{-- ------------content part-------------- --}}
    @yield('content')
    {{-- ------------content part-------------- --}}

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Satellite Connection</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://satconbd.com/">satconbd.com</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('backend.footer');
</body>

</html>