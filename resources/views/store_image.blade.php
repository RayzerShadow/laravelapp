<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usługi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{ route('strona-glowna') }}" class="logo mr-auto"><img src="assets/img/logo1.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>

          <li><a class="nav-link scrollto " href="{{ url('/store_image')}}">Usługi</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#testimonials')}}">Opinie</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#services')}}">Produkty</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#team')}}">Zespół</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#contact')}}">Kontakt</a></li>
                @if (Route::has('login'))

               @auth
               <li><a class="nav-link scrollto" href="{{ route('logout') }}">Wyloguj się</a></li>
               </li><a class="nav-link scrollto" href="http://127.0.0.1:8000/user">Profil</a></li>
               @else
               <li><a class="nav-link scrollto" href="{{ route('login') }}">Zaloguj się</a></li>

                   @if (Route::has('register'))
                   <li><a class="nav-link scrollto" href="{{ route('register') }}">Zarejestruj się</a></li>
                   @endif
               @endauth

       @endif

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<body>
   <!--<div class="container">

        <h3 class="section-title">Dodaj nową usługę do bazy</h3>
        <br />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <br />

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Formularz dodawania usługi</h3>
            </div>
            <div class="panel-body">
                <br />
                <form method="post" action="{{ url('store_image/insert_image') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Nazwa</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Cena</label>
                            <div class="col-md-8">
                                <input type="text" name="price" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Opis</label>
                            <div class="col-md-8">
                                <input type="text" name="description" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Czas trwania</label>
                            <div class="col-md-8">
                                <input type="text" name="time" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Zdjęcia</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <br />
                        <br />
                        <input type="submit" name="store_image" class="btn btn-primary" value="Zapisz" />
                    </div>
                </form>
            </div>
        </div>

    </div>  -->


        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Usługi</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">Zapoznaj się z usługami oferowanymi przez nasz salon. </p>
                    </div>
                </div>
                <div class="row portfolio-container">
                    @foreach ($data as $row)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">

                            <img src="store_image/fetch_image/{{ $row->id }}" class="img-fluid" alt=""
                                style="height: 320px; width: 450px; object-fit: cover;">
                            <div class="portfolio-info">
                                <h4>{{ $row->name }}</h4>
                                <p>{{ $row->price }} zł</p>
                                <p>{{ $row->time }}</p>

                                <a href="/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="App 1"><i
                                        class="bi bi-plus"></i></a>
                                <a href="{{ route('detail', ['id' => $row->id])}}" class="details-link" title="More Details"><i
                                        class="bi bi-link"></i></a>
                            </div>

                        </div>
                    @endforeach
                    {!! $data->links() !!}
                </div>
        </section>

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!--
            All the links in the footer should rema in intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br>
            <a href="{{ route('admin') }}">Profil administratora</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/typed.js/typed.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>
