@extends('frontend/app')

@section('content')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Contact</h3>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="far fa-circle px-3"></i>
            <p class="m-0">Contact</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-12" style="min-height: 500px">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.9971612470417!2d114.25923971478214!3d-8.401937993957365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeefbf07713299de8!2zOMKwMjQnMDcuMCJTIDExNMKwMTUnNDEuMSJF!5e0!3m2!1sid!2sid!4v1672395198341!5m2!1sid!2sid"
                        frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            <h1 class="mb-4">JAM BUKA</h1>
            <h6 class="d-inline-block text-primary text-uppercase bg-light py-1">Jam Buka Permata Salon &
                Spa</h6>
            <div class="owl-carousel testimonial-carousel">
                <div class="ml-3">
                    <h6 class="text-uppercase">SENIN</h6>
                    <span></span>
                    <p class="m-0">08.00 - 19.00 WIB</p>
                </div>
                <div class="ml-3">
                    <h6 class="text-uppercase">RABU</h6>
                    <span></span>
                    <p class="m-0">08.00 - 19.00 WIB</p>
                </div>
                <div class="ml-3">
                    <h6 class="text-uppercase">KAMIS</h6>
                    <span></span>
                    <p class="m-0">08.00 - 19.00 WIB</p>
                </div>
                <div class="ml-3">
                    <h6 class="text-uppercase">JUMAT</h6>
                    <span></span>
                    <p class="m-0">08.00 - 19.00 WIB</p>
                </div>
                <div class="ml-3">
                    <h6 class="text-uppercase">SABTU</h6>
                    <span></span>
                    <p class="m-0">08.00 - 19.00 WIB</p>
                </div>
                <div class="ml-3">
                    <h6 class="text-uppercase">MINGGU</h6>
                    <span></span>
                    <p class="m-0">08.00 - 19.00 WIB</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
