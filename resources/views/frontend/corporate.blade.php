@extends('frontend/layouts')
@section('content')
    <!-- Section Start -->
    <div class="custom-section1 position-relative "
        style="background-image: url('{{ asset('images/corporate-Internet-bg.jpg')}}');">
        <div class="custom-overlay1"></div>
        <div class="container content1 position-relative">
            <div class="row align-items-center">

                <div class="col-12">
                    <h1 class="display-4 fw-bold text-center ">Corporate Internet</h1>
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
                    <div class="row text-center mb-5">
                        <div class="col-12 fade-element fade-up">
                            <span class="icon-container">
                                <i class="fas fa-wifi"></i>
                            </span>
                            <h3 class="feature-heading mt-2">Explore Our Corporate Internet Features</h3>
                            <a href="{{ asset('images/Satellite.pdf')}}" target="_blank">BTRC APPROVED TARIFF</a>
                            <h1 class="subheading">Let your business to grow with us</h1>
                        </div>
                    </div>

                    <div class="row gy-4">

                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="px-3">
                                    <i class="bi bi-graph-up-arrow text-danger" style="font-size: 50px;"></i>
                                </div>
                                <div class="">
                                    <h3 class="feature-heading text-dark text-start mt-2 mb-0">IP-PABX</h3>
                                    <ul class="pt-0">
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span><strong>Enjoy free PABX system by connecting to our IP-PABX platform</strong></span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Zero CapEx</span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Scalable depending on your staffing needs</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="px-3">
                                    <i class="ibi bi-globe2 text-danger" style="font-size: 50px;"></i>
                                </div>
                                <div class="">
                                    <h3 class="feature-heading text-dark text-start mt-2 mb-0">Domain Name Registration</h3>
                                    <ul class="pt-0">
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span><strong>Establish your business identity on the world wide web</strong></span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Branding</span></li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Improve Search Engine Ranking</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="px-3">
                                    <i class="bi bi-rocket-takeoff text-danger" style="font-size: 50px;"></i>
                                </div>
                                <div class="">
                                    <h3 class="feature-heading text-dark text-start mt-2 mb-0">Web Hosting</h3>
                                    <ul class="pt-0">
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span><strong>Hosting opportunity for your website</strong></span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Domain-Associated Email Address</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="px-3">
                                    <i class="bi bi-hourglass-top text-danger" style="font-size: 50px;"></i>
                                </div>
                                <div class="">
                                    <h3 class="feature-heading text-dark text-start mt-2 mb-0">Barracuda</h3>
                                    <ul class="pt-0">
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span><strong>Shields against email-borne viruses, malware and spam</strong></span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Protects your network from viruses and malware.</span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Save Internet bandwidth</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="px-3">
                                    <i class="bbi bi-gem text-danger" style="font-size: 50px;"></i>
                                </div>
                                <div class="">
                                    <h3 class="feature-heading text-dark text-start mt-2 mb-0">Redundant Link</h3>
                                    <ul class="pt-0">
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span><strong>A backup link to keep your Internet operational</strong></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="px-3">
                                    <i class="bi bi-lightbulb text-danger" style="font-size: 50px;"></i>
                                </div>
                                <div class="">
                                    <h3 class="feature-heading text-dark text-start mt-2 mb-0">Video Conferencing</h3>
                                    <ul class="pt-0">
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span><strong>Online meeting with participants from remote places</strong></span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Demonstrate your product remotely</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="px-3">
                                    <i class="i bi-bank text-danger" style="font-size: 50px;"></i>
                                </div>
                                <div class="">
                                    <h3 class="feature-heading text-dark text-start mt-2 mb-0">Complementary Home Internet</h3>
                                    <ul class="pt-0">
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span><strong>One Home Internet connection for IT Manager for support from home
                                            O</strong></span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>One Home Internet connection for working from home</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="px-3">
                                    <i class="bi bi-patch-check text-danger" style="font-size: 50px;"></i>
                                </div>
                                <div class="">
                                    <h3 class="feature-heading text-dark text-start mt-2 mb-0">Web Application Firewall (WAF)</h3>
                                    <ul class="pt-0">
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span><strong>Protect your websites and applications against fraud or data theft</strong></span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Prevents Data Leak</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="px-3">
                                    <i class="bi bi-patch-check text-danger" style="font-size: 50px;"></i>
                                </div>
                                <div class="">
                                    <h3 class="feature-heading text-dark text-start mt-2 mb-0">Data Connectivity</h3>
                                    <ul class="pt-0">
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span><strong>Leading-edge MPLS technology for absolute privacy</strong></span>
                                        </li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Provider independence for increased resilience</span></li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Features service level guarantees for latency, jitter and packet loss</span></li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>Enterprise-grade security and accessibility</span></li>
                                        <li class="pb-0"><i class="bi bi-check text-danger"></i> <span>24/7 monitoring, management and support</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

    </section>
    <!-- Discover Our Best Plans end  -->
@endsection
