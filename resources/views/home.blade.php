<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content="width=device-width,height=device-height, initial-scale=1, shrink-to-fit=yes">

    <!--theme colors -->
    <meta name="theme-color" content="" />
    <meta name="apple-mobile-web-app-status-bar-style" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!--Basic meta info -->
    <meta name="keywords" content="{{ $seo_title->teks }}">
    <meta name="author" content="IAKN Palangka Raya" />
    <meta name="description" content="{{ $seo_deskripsi->teks }}">

    <!--OpenGraph meta -->
    <meta property="og:description" content="{{ $seo_deskripsi->teks }}" />
    <meta property="og:title" content="{{ $seo_title->teks }}" />
    <meta property="og:image" content="{{ asset('assets/' . $seo_image->link) }}" />
    <meta property="og:url" content="{{ url('/' . $slug_prodi) }}" />

    <!--meta for twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@humas_iaknpky">
    <meta name="twitter:title" content="{{ $seo_title->teks }}">
    <meta name="twitter:image" content="{{ asset('assets/' . $seo_image->link) }}">
    <meta name="twitter:site" content="@humas_iaknpky">
    <meta name="twitter:description" content="{{ $seo_deskripsi->teks }}">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    <meta name="csrf-token" content="9Yl84flE1ZuGjvnMjkqxeIpiAGfl0damtGqR9Bvt">

    <title>{{ $header->teks }}</title>

    <!-- Favicons -->
    {{--
    <link href="{{ asset('assets') }}/img/favicon.png" rel="icon"> --}}
    {{--
    <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/bootstrap-new.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

</head>
<style>
    .btn-primary {
        border: #ededed 1px solid;
    }

    .link-admin {
        text-decoration: underline;
    }

    #hero {
        width: 100%;
        height: 100vh;
        background: url("{{ asset('assets/' . $fotobg->link) }}") center center no-repeat;
        background-size: cover;
    }

    .fixed-top {
        background-color: rgba(20, 7, 198, 0.543);
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <div style="max-width: 300px">
                <h1 class="logo" style="font-size: 14px"><a href="{{ url('') }}">{{ $header->teks }}</a></h1>
            </div>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> --}}

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#pal4">{{ $pal4->teks }}</a></li>
                            <li><a href="#pal4">Visi</a></li>
                            <li><a href="#pal4">Misi</a></li>
                            <li><a href="#counts">Statistik</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#link">Link Tertaut</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="https://api.whatsapp.com/send/?phone=6281244525709">INFO PENDAFTARAN</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{!! $pal1->teks !!}</h1>
                    <h2>{!! $pal2->teks !!}</h2>
                    <div><a href="{{ $pal3->link }}" class="btn-get-started scrollto">{{ $pal3->teks }}</a></div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('assets/' . $foto1->link) }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ asset('assets/' . $foto2->link) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3 id="pal4">{{ $pal4->teks }}</h3>
                        <p class="fst-italic">{{ $pal5->teks }}</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> {{ $pal6->teks }}</li>
                            <li><i class="bi bi-check-circle"></i> {{ $pal7->teks }}</li>
                            <li><i class="bi bi-check-circle"></i> {{ $pal8->teks }}</li>
                        </ul>
                        <div class="mb-3">
                            <h4>VISI</h4>
                            <p>{{ $visi->teks }}</p>
                        </div>
                        <div class="mb-5">
                            <h4>MISI</h4>
                            <p>{{ $misi->teks }}</p>
                        </div>
                        <a href="{{ $pal3->link }}" class="read-more">{{ $pal3->teks }} <i class="bi bi-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-6 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $count1->link }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p> {{ $count1->teks }}</p>
                    </div>
                    <div class="col-lg-6 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $count2->link }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ $count2->teks }}</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="link" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Link - Link</h2>
                    <p>Link Dokumen, Data, Layanan, Website, dan sebagainya</p>
                </div>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
                <div id="datalink" class="row justify-content-center">
                    <style>
                        .font-link {
                            font-size: 20px !important;
                        }
                    </style>
                    <div class="col-12 px-2 py-1 text-center">
                        @foreach ($dokumen as $dok)
                            <a href="{{ $dok->link }}" target="_blank" class="btn btn-primary m-2 font-link"><span class="btn btn-warning btn-sm me-1">{{ $loop->iteration }}</span>
                                {{ $dok->teks }}</a>
                        @endforeach
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Artikel Section ======= -->
        {{-- <section class="counts"> --}}
        <section style="background-image: url('https://iaknpky.ac.id/asset/img/background/berita_motif.png')">
            <div class="container">
                <style>
                    img.framed {
                        box-shadow:
                            -50px -50px 0 -40px rgb(56, 2, 253),
                            50px 50px 0 -40px rgb(56, 2, 253);
                    }
                </style>
                <div class="section-title">
                    <h2>Berita IAKN Palangka Raya</h2>
                    <p>Bersumber dari : iaknpky.ac.id</p>
                </div>
                <div class="row">
                    <div class="row">
                        @foreach ($artikels as $ar)
                            <div class="col-lg-4 col-md-4 col-12 p-3">
                                <a href="https://iaknpky.ac.id/{{ $ar->slug }}">
                                    <img style="max-width: 250; max-height: 250px; object-fit: cover; border-radius: 8px;" class="card-img-top"
                                        src="{{ url('https://iaknpky.ac.id/asset/img/berita/thumbnails/' . $ar->img) }}" alt="...">
                                    <div class="mt-3">
                                        <h5>{{ strlen($ar->judul) < 90 ? $ar->judul : substr($ar->judul, 0, 100) . '....' }} </h5>
                                        <p class="fst-italic p-0 m-0">
                                            <span class="mx-1" style="font-size: 2.5vh"><i class="fas fa-user-tie me-1"></i>By {{ $ar->user->name }}</span>
                                            <span class="mx-1" style="font-size: 2.5vh"><i class="far fa-calendar-alt me-1"></i>{{ date('d F, Y', strtotime($ar->created_at)) }}</span>
                                            <span class="mx-1" style="font-size: 2.5vh"><i class="far fa-clock me-1"></i>{{ date('H:i:s', strtotime($ar->created_at)) }} WIB</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <a href="https://iaknpky.ac.id/artikel" target="_blank" class="btn btn-primary mt-5">Lihat Berita Selengkapnya</a>
                </div>

            </div>
        </section>
        <!-- End Artikel Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Kunjungi Kami disini untuk kenal lebih dekat</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Alamat Kami</h3>
                            <p>{!! $alamat->teks !!}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>{{ $email->teks }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>No HP</h3>
                            <p>{{ $nohp->teks }}</p>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-5">
                        {!! $gmap->teks !!}
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>{!! $footer1->teks !!}</h3>
                        <p>
                            {!! $footer2->teks !!}
                            <br>
                            <strong> Phone:</strong> {{ $nohp->teks }}<br>
                            <strong> Email:</strong> {{ $email->teks }}<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            @foreach ($footerlink as $fl)
                                <li><i class="bx bx-chevron-right"></i> <a href="{{ $fl->link }}">{{ $fl->teks }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>{{ $footer3->teks }}</h4>
                        <p>{{ $footer4->teks }}</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span><a class="text-white" href="https://tipd.iaknpky.ac.id/">UPT TIPD IAKN Palangka Raya</a></span></strong>. All Rights Reserved
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="{{ $whatsapp->link }}" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                    <a href="{{ $facebook->link }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="{{ $instagram->link }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <style>
        .button-whatsapp {
            position: fixed;
            right: 15px;
            bottom: 60px;
            z-index: 996;
            border-radius: 4px;
            transition: all 0.4s;
        }

        .button-whatsapp img {
            width: 40px;
            height: 40px;
        }
    </style>
    <a class="button-whatsapp {{ $whatsapp->link ? '' : 'd-none' }}" href="{{ $whatsapp->link }}"><img src="{{ asset('assets/img_default/whatsapp-icon-logo-png.png') }}" alt=""></a>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>

</body>

</html>
