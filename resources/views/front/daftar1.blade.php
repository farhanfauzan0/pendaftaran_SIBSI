<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pendaftaran Siswa Baru</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Bocor/assets/img/favicon.png" rel="icon">
    <link href="Bocor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link type="text/css" rel="stylesheet" href="/tmpl_admin/css/components.css" />
    <link type="text/css" rel="stylesheet" href="/tmpl_admin/css/custom.css" />
    <link type="text/css" rel="stylesheet" href="/tmpl_admin/vendors/circliful/css/jquery.circliful.css">
    <link href="{{ asset('Bocor/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="Bocor/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/aos/aos.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/tmpl_admin/css/components.css" />
    <link href="Bocor/assets/css/style.css" rel="stylesheet">
    <style>
        .notifications_badge_top {
            top: -12px !important;
            margin-left: -7px !important;
        }

    </style>
    <link type="text/css" rel="stylesheet" href="/tmpl_admin/vendors/animate/css/animate.min.css" />

    <link href="Bocor/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="/">PSB<span>Online</span></a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    @if (!Auth::guard('client')->check())
                        <li><a href="{{ route('login.index') }}">Login</a></li>
                        <li><a href="{{ route('register.index') }}">Register</a></li>

                    @endif

                    @if (Auth::guard('client')->check())
                        <li><a href="{{ route('pendaftaran.index') }}">Pendaftaran</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>

                    @endif
                    <li><a href="{{ route('tentang') }}">Tentang</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row d-flex align-items-center" style="height: 650px">
                <div class="col-lg-12 py-5 py-lg-0 order-2 order-lg-1">
                    <div class="row justify-content-center">
                        <div class="col-8 align-self-center">
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card card-inverse card-warning m-t-35">
                                <div class="card-header" style="font-size: 25px; align-self: center">
                                    Bukti Pendaftaran</div>
                                <div class="card-block" style="text-align: center">
                                    <p class="card-text" style="font-size: 120px">

                                    </p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-text" style="font-size: 12px">Nama
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->nama }}</p>
                                            </p>
                                            <p class="card-text" style="font-size: 12px">Tempat Lahir
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->tempat_lahir }}</p>
                                            </p>
                                            <p class="card-text" style="font-size: 12px">Tanggal Lahir
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->tgl_lahir }}</p>
                                            </p>
                                            <p class="card-text" style="font-size: 12px">Alamat:
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->alamat }}</p>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="card-text" style="font-size: 12px">Nama Ibu
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->nama_ibu }}</p>
                                            </p>
                                            <p class="card-text" style="font-size: 12px">Tempat Lahir Ibu
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->tempat_lahir_ibu }}</p>
                                            </p>
                                            <p class="card-text" style="font-size: 12px">Tanggal Lahir Ibu
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->tgl_lahir_ibu }}</p>
                                            </p>
                                            <p class="card-text" style="font-size: 12px">Alamat Ibu
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->alamat_ibu }}</p>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="card-text" style="font-size: 12px">Nama Ayah
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->nama_ayah }}</p>
                                            </p>
                                            <p class="card-text" style="font-size: 12px">Tempat Lahir Ayah
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->tempat_lahir_ayah }}</p>
                                            </p>
                                            <p class="card-text" style="font-size: 12px">Tanggal Lahir Ayah
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->tgl_lahir_ayah }}</p>
                                            </p>
                                            <p class="card-text" style="font-size: 12px">Alamat Ayah
                                            <p class="card-text" style="font-size: 20px ; font-weight: bold">
                                                {{ $data->alamat_ayah }}</p>
                                            </p>
                                        </div>
                                    </div>
                                    <a class="btn btn-success" href="{{ route('cetak.bukti', ['id' => $data->id]) }}"
                                        target="_blank">Cetak</a>

                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End Hero -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="Bocor/assets/vendor/jquery/jquery.min.js"></script>
    <script src="Bocor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bocor/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="Bocor/assets/vendor/php-email-form/validate.js"></script>
    <script src="Bocor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="Bocor/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="Bocor/assets/vendor/venobox/venobox.min.js"></script>
    <script src="Bocor/assets/vendor/aos/aos.js"></script>
    {{-- <script type="text/javascript" src="/tmpl_admin/vendors/pnotify/js/pnotify.js"></script>
    <script type="text/javascript" src="/tmpl_admin/vendors/pnotify/js/pnotify.animate.js"></script>
    <script type="text/javascript" src="/tmpl_admin/vendors/pnotify/js/pnotify.buttons.js"></script>
    <script type="text/javascript" src="/tmpl_admin/vendors/pnotify/js/pnotify.confirm.js"></script>
    <script type="text/javascript" src="/tmpl_admin/vendors/pnotify/js/pnotify.nonblock.js"></script>
    <script type="text/javascript" src="/tmpl_admin/vendors/pnotify/js/pnotify.mobile.js"></script>
    <script type="text/javascript" src="/tmpl_admin/vendors/pnotify/js/pnotify.desktop.js"></script>
    <script type="text/javascript" src="/tmpl_admin/vendors/pnotify/js/pnotify.history.js"></script>
    <script type="text/javascript" src="/tmpl_admin/vendors/pnotify/js/pnotify.callbacks.js"></script> --}}
    {{-- <script type="text/javascript" src="/tmpl_admin/js/pages/p_notify.js"></script> --}}

    <!-- Template Main JS File -->
    <script src="Bocor/assets/js/main.js"></script>
    {{-- <script type="text/javascript" src="/tmpl_admin/js/custom.js"></script> --}}

    <script>
        $("#request_btn, #notifications_section, #messages_section").on("click", function() {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            $('#notifications_dropdown, #messages_dropdown').addClass('animated fadeIn').one(
                animationEnd,
                function() {
                    $("#notifications_dropdown, #messages_dropdown").removeClass(
                        'animated fadeIn');
                });
        });

    </script>

</body>

</html>
