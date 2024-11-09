@extends('frontend/layouts')
@section('content')
    <!-- Section Start -->

    <div class="custom-section1 position-relative " style="background-image: url('{{ asset('images/Vector.avif')}}');">
        <div class="custom-overlay2"></div>
        <div class="container content1 position-relative">
            <div class="row align-items-center">

                <div class="col-12">
                    <h1 class="display-4 fw-bold text-center ">About Us</h1>
                </div>

            </div>
        </div>
    </div>
    <!-- Section End -->


    <!-- About Section -->
    <section id="about" class="about section py-5"
        style="background-image: url('{{ asset('images/bg-about.png')}}'); background-position: left bottom; background-repeat: no-repeat;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 content fade-element fade-up">
                    <h4 class="d-flex align-items-center mb-3">
                        <div class="icon-container3">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <span style="color: red;font-family: 'Saira Extra Condensed', sans-serif;">About Satellite
                            Connection</span>
                    </h4>
                    <h3>Satellite Connection Broadband Is Available To All Corners Of
                        Dhaka Division</h3>
                    <p>
                        For over 15 years, Satellite Connection has been a trusted name in broadband, delivering seamless,
                        high-speed internet to homes and businesses. Committed to excellence, we combine innovative
                        technology with a customer-first approach, ensuring reliable connectivity and top-tier support
                        across [Region]. Known for our unwavering quality and service, we cater to diverse needs with
                        customized packages, empowering clients to thrive in an increasingly digital world. With Satellite
                        Connection, experience a future of limitless possibilities through dependable, high-performance
                        internet solutions.
                    </p>

                    <p>
                        Satellite Connection is a home and corporate broadband internet service provider that has been
                        operating for over 15 years. We have gained an excellent reputation among clients by providing
                        uncompromising quality and committed service.
                    </p>
                </div>

                <div class="col-lg-6 fade-element fade-down">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/about.png')}}" class="w-100" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section py-5">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">

                <div class="col-lg-6 d-flex align-items-center">
                    <img src="{{ asset('images/skills.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 content">

                    <h3>Our Achievements</h3>
                    <p class="fst-italic">
                        Satellite Connection is a home and corporate broadband internet service provider that has been
                        operating for over 15 years. We have gained an excellent reputation among clients by providing
                        uncompromising quality and committed service.
                    </p>

                    <div class="skills-content skills-animation">

                        <div class="progress">
                            <span class="skill"><span>Full Network Visibility</span> <i class="val">90% </i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Successful Contracts</span> <i class="val">95%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Resilient Connectivity</span> <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Fiber Optics</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                </div>
                <div class="slider-arrow left-arrow"></div>
                <div class="slider-arrow right-arrow"></div>
            </div>

        </div>

    </section><!-- /Skills Section -->


    <div class="custom-section5 my-5 position-relative" style="background-image: url('{{ asset('images/about.jpg')}}');">
        <div class="custom-overlay5 "></div>
        <div class="container  content5 position-relative">
            <div class="row align-items-center">
                <div class="col-md-12 d-flex flex-column flex-md-row align-items-center">
                    <!-- Image and Text Section -->
                    <div
                        class="col-md-6 d-flex flex-column align-items-center text-center text-md-left position-relative mb-4 mb-md-0">
                        <div class="img-container5">
                            <img src="{{ asset('images/shutterstock_2367829297.jpg')}}" alt="Home Network"
                                class="img-fluid rounded shadow-lg custom-img">
                        </div>
                        <!-- Text Below Image -->
                        <div class="text-below py-5 d-flex flex-column flex-md-row justify-content-center">
                            <div class="text-item mb-1 mb-md-0">
                                <h4 class="count" data-count="1200">0</h4>
                                <p>Happy Customers</p>
                            </div>
                            <div class="text-item mb-1 mb-md-0">
                                <h4 class="count" data-count="564">0</h4>
                                <p>Project Completed</p>
                            </div>
                            <div class="text-item">
                                <h4 class="count" data-count="50">0</h4>
                                <p>Cities Coverage</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Content -->
                    <div class="col-md-6 d-flex flex-column justify-content-center text-center text-md-start">
                        <h3 class="d-flex align-items-center mb-3">
                            <div class="icon-container2 mr-2">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <span style="color: red;font-family: 'Saira Extra Condensed', sans-serif;">About Satellite
                                Connection</span>
                        </h3>
                        <h1 class="mb-3">Satellite Connection Broadband Is <br> Available To All Corners Of <br> Dhaka
                            City Corporation</h1>
                        <p class="lead">To get started with us, please go over all of our internet plans and other plans
                            to let our operators know which one works for you the best! We guarantee high-quality
                            customer support service with high-speed FTTH broadband connection all over the country.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <!-- New Content Section -->
            <div class="row text-center mt-5">
                <div class="col-12">
                    <h1 class="subheading">Why Choose Us</h1>
                </div>
            </div>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <a href="#" class="feature-link">
                            <div class=" p-3 text-center">
                                <div class="icon-container mb-3">
                                    <i class="fas fa-rocket"></i> <!-- Example icon for IPv4 & IPv6 -->
                                </div>
                                <h4 style="font-family: 'Saira Extra Condensed', sans-serif;">Fast Speed</h4>
                                <p>Satellite Connection is the popular fastest internet Service provider, We Commited
                                    Fastest Reachability.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <a href="#" class="feature-link">
                            <div class=" p-3 text-center">
                                <div class="icon-container mb-3">
                                    <i class="fas fa-house"></i> <!-- Example icon for Advance Monitoring -->
                                </div>
                                <h4 style="font-family: 'Saira Extra Condensed', sans-serif;">Fast Installation</h4>
                                <p>we help you get the right Connection installed. And we'll deliver directly to your
                                    FTTH Connection.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <a href="#" class="feature-link">
                            <div class=" p-3 text-center">
                                <div class="icon-container mb-3">
                                    <i class="fas fa-wallet"></i> <!-- Example icon for FTTH -->
                                </div>
                                <h4 style="font-family: 'Saira Extra Condensed', sans-serif;">Flexible Tariff Plans</h4>
                                <p>Satellite Connection is always trying to make customers happy by providing good
                                    customer service at low cost.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <a href="#" class="feature-link">
                            <div class=" p-3 text-center">
                                <div class="icon-container mb-3">
                                    <i class="fas fa-headset"></i> <!-- Example icon for 24/7 Hotline -->
                                </div>
                                <h4 style="font-family: 'Saira Extra Condensed', sans-serif;">24/7 Support</h4>
                                <p>24/7 Support friendly, Get remote access and assistance via call or on-site service
                                    to solve your issues.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- About Section -->
    <section class="about section"
        style="background-image: url('{{ asset('images/bg-about.png')}}'); background-position: left bottom; background-repeat: no-repeat;">

        <div class="container">
            <div class="row gy-4 align-items-center">

                <div class="col-lg-5 text-center">
                    <img src="{{ asset('images/mission-vission.png')}}" class="img-fluid" alt="">
                </div>


                <div class="col-lg-7 content order-last  order-lg-first">
                    <h3>About Us</h3>
                    <p>
                        We prioritize reliability in delivering consistent, high-quality internet service, guided by
                        integrity and transparency. Our customer-centric approach ensures we meet clients' needs, while our
                        commitment to innovation keeps us advancing and improving.
                    <ul>
                        <li>
                            <i class="bbi bi-gem" style="font-size: 40px;"></i>
                            <div>
                                <h5 class="mt-2">Core Values</h5>
                                <p>Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas
                                    deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti
                                    totam ut eius incidunt reiciendis veritatis asperiores placeat.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-eye" style="font-size: 40px;"></i>
                            <div>
                                <h5 class="mt-2">Our Vision</h5>
                                <p>
                                    To lead as a trusted ISP, bridging digital divides and empowering communities with
                                    accessible, high-speed internet for all.

                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-bullseye" style="font-size: 40px;"></i>
                            <div>
                                <h5 class="mt-2">Our Mission</h5>
                                <p>
                                    To provide fast, dependable internet solutions for homes and businesses, foster enduring
                                    client relationships, and continuously innovate to meet future connectivity demands.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>

        </div>

    </section>
    <!-- /About Section -->





    <div class="container my-3">
        <h2 style="font-family: 'Saira Extra Condensed', sans-serif;" class="text-center mb-4">Meet Our Team</h2>
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="team-member">
                    <img src="{{ asset('images/ceo-480w.min.jpg')}}" alt="Mrinal K Roy">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h5>Mrinal K Roy</h5>
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="team-member">
                    <img src="{{ asset('images/mosharraf-hossen-480w.min.jpg')}}" alt="Mosharraf Hossen">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h5>Mosharraf Hossen</h5>
                            <p>Chief Technical Officer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="team-member">
                    <img src="{{ asset('images/kabbo.png')}}" alt="kabbo Biswas">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h5>Kabbo Biswas</h5>
                            <p>Asst. Engineer, System & Network</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="team-member">
                    <img src="{{ asset('images/razi.jpg')}}" alt="Kowshik Akanda Razi">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h5>Kowshik Akanda Razi</h5>
                            <p>Engineer, System & Network</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
