@extends('frontend/app')

@section('content')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Services</h3>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="far fa-circle px-3"></i>
            <p class="m-0">Services</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" src="{{asset('frontend/img/badan.jpg')}}" alt="" />
            </div>
            <div class="col-lg-6">
                <h1 class="mb-4">PERAWATAN BADAN</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>

                            </div>
                        </div>
                        <p class="m-0"> -Massage + lulur</p>
                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                        <p class="m-0"> -body Waxing, Tangan, Kaki</p>
                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                        <p class="m-0"> -Ratus vagina</p>
                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                        <p class="m-0"> -Masker Body</p>
                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                        <p class="m-0"> -Body blaching</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" src="{{asset('frontend/img/rambut.jpg')}}" alt="" />
            </div>
            <div class="col-lg-6">
                <!-- <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6> -->
                <h1 class="mb-4">PERAWATAN RAMBUT</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>

                            </div>
                        </div>
                        <p class="m-0"> -Smothing salju </p>
                        <p class="m-0"> -Smothing Sutra </p>
                        <p class="m-0"> -Smothing Matrix </p>

                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                        <p class="m-0">-Hair Color Fashion</p>
                        <p class="m-0"> -Hair Color Peek A Boo</p>
                        <p class="m-0"> -Hair Color Hairlight</p>
                        <p class="m-0"> -Hair Color Full </p>

                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                        <p class="m-0"> -Rebonding Makarizo Hidroprisma</p>
                        <p class="m-0"> -Cuci Catok +Vitamin</p>
                        <p class="m-0"> -Cuci Blow + Vitamin</p>
                        <p class="m-0"> -Toning</p>

                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                        <p class="m-0"> -Hair Spa Matrix</p>
                        <p class="m-0"> -Hair Mask Makarizo</p>
                        <p class="m-0"> -Hair Extention</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" src="{{asset('frontend/img/wajah.jpg')}}" alt="" />
            </div>
            <div class="col-lg-6">
                <!-- <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6> -->
                <h1 class="mb-4">PERAWATAN WAJAH</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>

                            </div>
                        </div>
                        <p class="m-0"> -Facial Basic</p>
                        <p class="m-0"> -Facial OXY Dermabrasi</p>
                        <p class="m-0"> -Facial RF(Radio Frequenchy</p>
                    </div>
                    <div class="position-relative">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0"></i>
                        <div class="d-flex align-items-center mb-3">
                            <!-- <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px" alt="" /> -->
                            <div class="ml-3">
                                <h6 class="text-uppercase">nama-nama perawatan</h6>
                                <!-- <span>Profession</span> -->
                            </div>
                        </div>
                        <p class="m-0"> -Facial detox</p>
                        <p class="m-0"> -Facial Super whitening</p>
                        <p class="m-0"> -Facial PDT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
