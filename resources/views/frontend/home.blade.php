@extends('frontend/app')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="min-height: 100vh">
                <img class="position-absolute w-100 h-100" src="{{asset('frontend/img/home.jpg')}}" style="object-fit: cover" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                            style="letter-spacing: 3px">Permata Salon & Spa</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Massage Treatment</h3>
                        <p class="mx-md-5 px-5">Give yourself a moment to relax. find a minute to rejuvenate your body</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            <h1>SELAMAT DATANG DI PERMATA SALON & SPA</h1>
            <P class="d-inline-block  Border-primary text-uppercase py-1 px-2">Merawat kecantikan tubuh adalah sebuah
                kewajiban yang harus dilakukan oleh kaum wanita. Permata Salon & Spa menghadirkan berbagai rangkaian
                perawatan kecantikan mulai dari rambut, kulit wajah hingga seluruh tubuh</P>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Service</h6>
            <h1>Salon & Spa Services</h1>
        </div>
    </div>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-80" src="{{asset('frontend/img/badan.jpg')}}" style="width: 500px; height: 300px" alt="" />
            </div>
            <div class="col-lg-6">
                <h1>PERAWATAN BADAN</h1>
                <P class="d-inline-block  Border-primary text-uppercase py-1 px-2">"Menu perawatan badan menyajikan
                    berbagai pilihan untuk tubuh tetap bugar dan segar sepanjang hari"</P>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-80" src="{{asset('frontend/img/rambut.jpg')}}" style="width: 500px; height: 300px" alt="" />
            </div>
            <div class="col-lg-6">
                <h1>PERAWATAN RAMBUT</h1>
                <P class="d-inline-block  Border-primary text-uppercase py-1 px-2">"Menu perawatan rambut
                    menyajikan berbagai pilihan untuk memprcantik rambut"</P>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-80" src="{{asset('frontend/img/wajah.jpg')}}" style="width: 500px; height: 300px" alt="" />
            </div>
            <div class="col-lg-6">
                <h1>PERAWATAN WAJAH</h1>
                <P class="d-inline-block  Border-primary text-uppercase py-1 px-2">Menu perawatan wajah
                    menyajikan berbagai pilihan facial yang dapat di pilih customer"</P>
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
<!-- Service End -->
@endsection
