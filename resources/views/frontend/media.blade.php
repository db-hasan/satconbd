@extends('frontend/layouts')
@section('content')
    <div class="custom-section1 position-relative "
        style="background-image: url('{{ asset('images/shutterstock_2415780575.jpg')}}');">
        <div class="custom-overlay1"></div>
        <div class="container content1 position-relative">
            <div class="row align-items-center">

                <div class="col-12">
                    <h1 class="display-4 fw-bold text-center "></h1>
                </div>

            </div>
        </div>
    </div>
    <!-- Section End -->

    <!-- media  -->

    <div class="container py-5 my-5">
        <h1 style="font-family: 'Saira Extra Condensed', sans-serif;" class="centered-heading">All FTP Server List</h1>
        <a href="https://media.satconbd.com/" target="_blank" class="d-block text-decoration-none">
            <div class="ftp-box shadow-box border border-5 btn-danger">FTP Server</div>
        </a>
    </div>
@endsection
