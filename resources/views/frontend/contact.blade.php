@extends('frontend/layouts')
@section('content')
    <div class="custom-section1 position-relative "
        style="background-image: url('{{ asset('images/shutterstock_1943902624.jpg')}}');">
        <div class="custom-overlay1"></div>
        <div class="container content1 position-relative">
            <div class="row align-items-center">

                <div class="col-12">
                    <h1 class="display-4 fw-bold text-center ">Contact Us</h1>
                </div>

            </div>
        </div>
    </div>
    <section id="contact" class="contact section py-5">

        <div class="container">

            <div class="row gy-4 ">
                <div class="col-lg-6 ">
                    <form action="" method="post" class="php-email-form">
                        <h2 class="mb-5 text-danger">Make a Contact</h2>
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="number" class="form-control" name="number" placeholder="Your Number"
                                    required="">
                            </div>

                            <div class="col-12">
                                <select class="form-select">
                                    <option selected disabled>Select</option>
                                    <option>Home User</option>
                                    <option>Corporate</option>
                                </select>

                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="col-lg-6 info-item">
                    <div class="col-12 contact-support">
                        <h2>Uttara Branch (Head Office)</h2>
                        <p>House #52 (7th Floor)
                            Road #1 (Jashimuddin Road)
                            Sector #3, Uttara Dhaka 1230, Bangladesh</p>
                        <small>+09613371444</small><br>
                        <a href="">info@satconbd.com</a> <br>
                        <a href="https://maps.app.goo.gl/jKDnru3pFsQiSQsY8">Driection <i class='bx bxs-direction-right'
                                style="font-size: 15px;"></i></a>
                    </div>
                    <div class="col-12 contact-support">
                        <h2>Tongi Branch</h2>
                        <p>Avijan 45, College Road, Tongi, Gazipur, Bangladesh</p>
                        <small>+09613371444 </small><br>
                        <a href="">contact@proinfoedu.com</a><br>
                        <a href="https://maps.app.goo.gl/pLyLzqLHioKhAReWA">Driection <i class='bx bxs-direction-right'
                                style="font-size: 15px;"></i></a>
                    </div>
                    <!-- <div class="col-12 contact-support">
                    <h2>Khulna Branch</h2>
                    <p>18/A (4th floor of Aarong Building), Eden Plaza, KDA New Market, Khulna,
                        Bangladesh.</p>
                    <small>+09613371444 </small><br>
                    <a href="">info@satconbd.com</a><br>
                    <a href="">Driection <i class='bx bxs-direction-right'></i></a>
                </div> -->
                </div>


            </div>

        </div>

    </section>
    <!-- Section End -->

    <div class="col-md-12">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.789874087033!2d90.39183527516721!3d23.86159417859472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5fcbaa3f405%3A0xae8636fd2059fa05!2sSatellite%20Connection%20(Divisional%20ISP)!5e0!3m2!1sen!2sbd!4v1723866950784!5m2!1sen!2sbd"
            width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
@endsection
