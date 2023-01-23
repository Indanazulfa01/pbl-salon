@extends('frontend/app')

@section('content')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Client Galery</h3>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="far fa-circle px-3"></i>
            <p class="m-0">Client Galery</p>
        </div>
    </div>
</div>
<!-- Header End -->
<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Testimoni</h6>
            <h1>Salon & Spa Client Galery</h1>
        </div>
    </div>
    <div class="owl-carousel service-carousel">
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/img/galery 1.jpg')}}" alt="" />
            <div class="w-100 bg-white text-center p-4"></div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/img/galery 2.jpg')}}" alt="" />
            <div class="w-100 bg-white text-center p-4"></div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/img/galery 3.jpg')}}" alt="" />
            <div class="w-100 bg-white text-center p-4"></div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/img/galery 4.jpg')}}" alt="" />
            <div class="w-100 bg-white text-center p-4"></div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/img/galery 5.jpg')}}" alt="" />
            <div class="w-100 bg-white text-center p-4"></div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="{{asset('frontend/img/galery 6.jpg')}}" alt="" />
            <div class="w-100 bg-white text-center p-4"></div>
        </div>
    </div>
</div>
@endsection
