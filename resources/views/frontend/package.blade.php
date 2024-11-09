@extends('frontend/layouts')
@section('content')
    <!-- Section Start -->

    <div class="custom-section1 position-relative "
        style="background-image: url('{{ asset('images/shutterstock_2193347831.jpg')}}');">
        <div class="custom-overlay1"></div>
        <div class="container content1 position-relative">
            <div class="row align-items-center">

                <div class="col-12">
                    <h1 class="display-4 fw-bold text-center ">Packages</h1>
                </div>

            </div>
        </div>
    </div>
    <!-- Section End -->

    <!-- Discover Our Best Plans start  -->

    <section id="pricing" class="pricing section light-background"
        style="background-image: url('{{ asset('images/bg-package.jpg')}}'); background-size: cover;">
        <div class="py-5">

            <!-- Section Title -->
            <div class="container section-title">

                <div class="container">
                    <div class="row text-center">
                        <div class="col-12 fade-element fade-up">
                            <span class="icon-container">
                                <i class="fas fa-wifi"></i>
                            </span>
                            <h3 class="feature-heading mt-2">Satellite Connection Pricing</h3>
                            <a href="{{ asset('images/Satellite.pdf')}}" target="_blank">BTRC APPROVED TARIFF</a>
                            <h1 class="subheading">Pick The Best Plan For You</h1>
                        </div>
                    </div>

                    <div class="row gy-4">

                        <div class="col-lg-4 fade-element fade-left">
                            <div class="pricing-item text-light" style="background-color: #000">
                                <h3>Corporate Service</h3>
                                <h4><sup>Price Customizing.</sup></h4>
                                <ul class="text-light">
                                    <li><i class="bi bi-check"></i> <span><strong>Dedicated ip address</strong></span>
                                    </li>
                                    <li><i class="bi bi-check"></i> <span>IP line service</span></li>
                                    <li><i class="bi bi-check"></i> <span>Web Application Firewall (WAF)</span></li>
                                    <li><i class="bi bi-check"></i> <span>Unlimited Mbps BDIX Bandwidth</span></li>
                                </ul>
                                <a href="{{route('corporate')}}" class="buy-btn">View More</a>

                            </div>
                        </div><!-- End Pricing Item -->
                        <div class="col-lg-4 fade-element fade-down">
                            <div class="pricing-item">
                                <h3>Silver (15 Mbps)</h3>
                                <h4><sup>Tk. </sup>500<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span><strong>24 Hours - 15 Mbps</strong></span>
                                    </li>
                                    <li><i class="bi bi-check"></i> <span>Unlimited Mbps BDIX Bandwidth</span></li>
                                    <li><i class="bi bi-check"></i> <span>4K Youtube and Facebook Stream</span></li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                    </li>
                                </ul>
                                <a href="https://wa.me/+8809613371444" target="_blank" class="buy-btn">Contact Us</a>

                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4 fade-element fade-right">
                            <div class="pricing-item">
                                <h3>Gold (24 Mbps)</h3>
                                <h4><sup>Tk. </sup>800<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span><strong>24 Hours - 15 Mbps</strong></span>
                                    </li>
                                    <li><i class="bi bi-check"></i> <span>Unlimited Mbps BDIX Bandwidth</span></li>
                                    <li><i class="bi bi-check"></i> <span>4K Youtube and Facebook Stream</span></li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                    </li>
                                </ul>
                                <a href="https://wa.me/+8809613371444" target="_blank" class="buy-btn">Contact Us</a>

                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4 fade-element fade-left">
                            <div class="pricing-item">
                                <h3>Platinum (30 Mbps)</h3>
                                <h4><sup>Tk. </sup>1000 <span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span><strong>24 Hours - 15 Mbps</strong></span>
                                    </li>
                                    <li><i class="bi bi-check"></i> <span>Unlimited Mbps BDIX Bandwidth</span></li>
                                    <li><i class="bi bi-check"></i> <span>4K Youtube and Facebook Stream</span></li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                    </li>
                                </ul>
                                <a href="https://wa.me/+8809613371444" target="_blank" class="buy-btn">Contact Us</a>
                            </div>
                        </div><!-- End Pricing Item -->
                        <div class="col-lg-4 fade-element fade-down">
                            <div class="pricing-item">
                                <h3>Platinum (36 Mbps)</h3>
                                <h4><sup>Tk. </sup>1200 <span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span><strong>24 Hours - 15 Mbps</strong></span>
                                    </li>
                                    <li><i class="bi bi-check"></i> <span>Unlimited Mbps BDIX Bandwidth</span></li>
                                    <li><i class="bi bi-check"></i> <span>4K Youtube and Facebook Stream</span></li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                    </li>
                                </ul>
                                <a href="https://wa.me/+8809613371444" target="_blank" class="buy-btn">Contact Us</a>
                            </div>
                        </div><!-- End Pricing Item -->
                        <div class="col-lg-4 fade-element fade-right">
                            <div class="pricing-item">
                                <h3>Platinum (45 Mbps)</h3>
                                <h4><sup>Tk. </sup>1500 <span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span><strong>24 Hours - 15 Mbps</strong></span>
                                    </li>
                                    <li><i class="bi bi-check"></i> <span>Unlimited Mbps BDIX Bandwidth</span></li>
                                    <li><i class="bi bi-check"></i> <span>4K Youtube and Facebook Stream</span></li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                    </li>
                                </ul>
                                <a href="https://wa.me/+8809613371444" target="_blank" class="buy-btn">Contact Us</a>
                            </div>
                        </div><!-- End Pricing Item -->

                    </div>

                </div>
            </div>

    </section>
@endsection
