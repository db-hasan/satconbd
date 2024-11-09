@include('frontend.header')

<body class="background">

    <!-- Navbar start -->
    <div class="navbar navbar-expand-lg custom-navbar sticky-top p-3">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo on the left -->
            <div class="navbar-logo-container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ 'images/satellite-logo.png' }}" alt="Company Logo" class="navbar-logo">
                </a>
            </div>

            <!-- Toggler for mobile view -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Centered Navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">
                            <h6>Home</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">
                            <h6>About</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">
                            <h6>Service</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('package') }}">
                            <h6>Packages</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('corporate') }}">
                            <h6>Corporate</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('media') }}">
                            <h6>FTP</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">
                            <h6>Contact</h6>
                        </a>
                    </li>
                </ul>

                <!-- Button on the left in the collapsed menu -->
                <div class="d-lg-none d-flex justify-content-start mt-3">
                    <a class="navbar-brand btn btn-danger" href="https://wa.me/+8801700776463"
                        onclick="return confirm('Are you sure want to call on Whatsapp?')" target="_blank"
                        style="color: white;">Satellite Connection Care</a>
                </div>
            </div>

            <!-- Button on the right for larger screens -->
            <div class="d-none d-lg-flex align-items-center">
                <a class=" navbar-brand btn btn-danger" href="https://wa.me/+8801700776463"
                    onclick="return confirm('Are you sure want to call on Whatsapp?')" target="_blank"
                    style="color: white;">Satellite Connection Care</a>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    {{-- ------------content part-------------- --}}
    @yield('content')
    {{-- ------------content part-------------- --}}

    <div class="message-button">
        <a href="https://wa.me/+8809613371444" class="display-button whatsapp" target="_blank">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>


    <div class="bg-cover position-relative"
        style="background-image: url('{{ asset('images/shutterstock_2183020827.jpg') }}');">
        <div class="overlay"></div> <!-- This is the overlay -->
        <div class="container position-relative">
            <div class="row py-5 text-light">
                <div class="col-lg-4">
                    <div class="footer-img">
                        <img src="{{ asset('images/satellite-logo.png') }}" alt="Company Logo" class="img-fluid">
                    </div>
                    <p class="me-4" style="text-align: justify;">Satellite Connection Broadband is now available to all corners of the Dhaka Division, providing high-speed internet access even in remote and underserved areas, ensuring reliable connectivity for businesses, homes, and educational institutions across the region.</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h3 style="color: #fff; font-family: 'Saira Extra Condensed', sans-serif;">Quick Links
                        <ul class="list-unstyled mt-4">
                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="{{route('contact')}}">Contact us</a></li>
                            <li><a href="{{route('service')}}">Our Service</a></li>
                            <li><a href="{{route('package')}}">Our Packages</a></li>
                            <li><a href="{{route('corporate')}}">Corporate Service</a></li>
                            
                        </ul>
                    </h3>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h3 style="color: #fff; font-family: 'Saira Extra Condensed', sans-serif;">Useful Links</h3>
                    <ul class="list-unstyled mt-4">
                        <li><a href="{{route('corporate')}}">FTP Server</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                        <li><a href="">Cookie Settings</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 style="color: #fff; font-family: 'Saira Extra Condensed', sans-serif;">Contact Us</h3>
                    <ul class="list-unstyled mt-4">
                        <li><a href=""><i class="fas fa-phone-alt me-2"></i> +09613371444</a></li>
                        <li><a href=""><i class="fas fa-envelope me-2"></i>
                                info@satconbd.com</a></li>
                        <li class="d-flex">
                            <a href=""><i class="bi bi-geo-alt-fill me-2"></i></a>
                            <div class="">
                                <a href="https://maps.app.goo.gl/jKDnru3pFsQiSQsY8">House #52 (7th Floor)
                                    Road #1 (Jashimuddin Road)
                                    Sector #3, Uttara Dhaka 1230, Bangladesh</a>
                                    
                            </div>
                        </li>
                        <li class="d-flex">
                            <a href=""><i class="bi bi-geo-alt-fill me-2"></i></a>
                            <div class="">
                                <a href="https://maps.app.goo.gl/jKDnru3pFsQiSQsY8">Avijan 45, College Road, Tongi, Gazipur, Bangladesh</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0">&copy; Copyright 2024 Satellite Connection. Powered by satconbd.com</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/SatelliteConnection" target="_blank" class="me-2"
                        aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="mailto:info@satconbd.com" target="_blank" class="me-2" aria-label="Email">
                        <i class="bi bi-envelope"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                        <i class="bi bi-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    @include('frontend.footer')
</body>

</html>
