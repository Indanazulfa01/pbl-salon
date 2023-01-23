<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PERMATA SALON & SPA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="/" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">PERMATA</span> SALON & SPA</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/service" class="nav-item nav-link">Service</a>
                    <a href="/gallery" class="nav-item nav-link">Client Galery</a>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                    <a href="/register" class="nav-item nav-link btn btn-secondary">Register</a>
                    <a href="/login" class="nav-item nav-link btn btn-primary">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid position-relative bg-dark py-5" style="margin-top: 90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="/" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">Permata</span> Salon & Spa</h1>
                    </a>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Dsn.Kabaman, Srono, Banyuwangi (Jln. arah srono sebelum
                        pertigaan Mtsn Srono)</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>081233658843</p>
                    <p><a class="social-media-icon" href="https://link_social_mendia_anda"><span
                                class="fab fa-instagram mr-2"></span></a></i>Permata_Salon_Spa</p>
                    <p><a class="social-media-icon" href="https://link_social_mendia_anda"><span
                                class="fab fa-instagram mr-2"></span></a></i>im.spa</p>
                    <p><a class="social-media-icon" href="https://link_social_mendia_anda"><span
                                class="fab fa-facebook mr-2"></span></a>Vanza real</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('frontend/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('frontend/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('frontend/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
