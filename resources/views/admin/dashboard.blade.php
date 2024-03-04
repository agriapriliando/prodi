<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $header->teks}}</title>

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img_default/favicon.png" rel="icon">
    <link href="{{ asset('assets') }}/img_default/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/bootstrap-new.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Techie
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
        background: url("{{ asset('assets/'.$fotobg->link) }}") center center no-repeat;
        background-size: cover;
    }
    
    .fixed-top {
        background-color: rgba(20, 7, 198, 0.543);
    }
</style>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <div style="max-width: 300px">
                <h1 class="logo" style="font-size: 17px"><a href="{{ url('') }}">{{ $header->teks }}</a></h1>
            </div>
            {{-- <h1 class="logo"><a href="{{ url('admin/'.$slug) }}">{{ $header->teks }}</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <a href="index.html" class="logo"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a> --}}

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('admin/'.$slug) }}">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Teks</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('part/'.$slug.'/'.$header->kode) }}">{{ strtoupper($header->kode) }}</a></li>
                            <li class="dropdown"><a href="#"><span>Part A</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($pal as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ url('part/'.$slug.'/'.$visi->kode) }}">{{ strtoupper($visi->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$misi->kode) }}">{{ strtoupper($misi->kode) }}</a></li>
                            <li class="dropdown"><a href="#"><span>Footer</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($footer as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Foto</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($foto as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Count</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($count as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>SEO</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($seo as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('part/'.$slug.'/'.$facebook->kode) }}">{{ strtoupper($facebook->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$whatsapp->kode) }}">{{ strtoupper($whatsapp->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$instagram->kode) }}">{{ strtoupper($instagram->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$instagramembed->kode) }}">{{ strtoupper($instagramembed->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$alamat->kode) }}">{{ strtoupper($alamat->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$nohp->kode) }}">{{ strtoupper($nohp->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$email->kode) }}">{{ strtoupper($email->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$gmap->kode) }}">{{ strtoupper($gmap->kode) }}</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('admin/'.$slug.'#link') }}">LINK</a></li>
                    <li class="dropdown"><a href="#"><span>Pilih Prodi/UPPS</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($user as $prodi)
                            <li><a href="{{ url('admin/'.$prodi->slug) }}">{{ $prodi->jenjang.'-'.strtoupper($prodi->nama_prodi) }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('logout') }}"><i style="font-size: 19px" class="bi bi-box-arrow-in-right me-2"></i> Logout</a></li>
                </ul>
                <i class="ms-3 bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid">
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <h5><strong>Berhasil</strong> {{ session('status') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <a href="{{ url('part/'.$slug.'/'.$pal1->kode) }}" class="text-white link-admin">({{ strtoupper($pal1->kode) }})</a>
                    @if (preg_match("/<[^<]+>/",$pal1->teks,$m) != 0)
                        <p>{!! $pal1->teks !!}</p>
                        @else
                        <h1>{!! $pal1->teks !!}</h1>
                        @endif
                        <a href="{{ url('part/'.$slug.'/'.$pal2->kode) }}" class="text-white">({{ strtoupper($pal2->kode) }})</a>
                        <h2>{{ $pal2->teks }}</h2>
                        <div><a href="{{ url('part/'.$slug.'/'.$pal3->kode) }}" class="text-white">({{ strtoupper($pal3->kode) }})</a> <a href="{{ $pal3->link }}" class="btn-get-started scrollto">{{ $pal3->teks }}</a></div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('assets/'.$foto1->link) }}" class="img-fluid animated" alt="">
                    <div class="row">
                        <span class="btn btn-warning p-2">Selamat Datang Administrator - Anda Login Sebagai {{ session('namauser') }}
                            <a href="{{ url('logout') }}" style="text-decoration: underline"><i class="bi bi-box-arrow-in-right"></i> Klik untuk Logout</a>
                            @if (session('iduser') == 1)
                                <a href="{{ url('admin/utama') }}"><i class="bi bi-file-earmark-lock ms-2"></i></a>
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            <div class="row mb-1 justify-content-center">
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ asset('assets/'.$foto2->link) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3><a href="{{ url('part/'.$slug.'/'.$pal4->kode) }}">({{ strtoupper($pal4->kode) }})</a> {{ $pal4->teks }}</h3>
                        <p class="fst-italic">
                            <a href="{{ url('part/'.$slug.'/'.$pal5->kode) }}">({{ strtoupper($pal5->kode) }})</a>
                            {{ $pal5->teks}}
                        </p>
                        <ul>
                            <li><a href="{{ url('part/'.$slug.'/'.$pal6->kode) }}">({{ strtoupper($pal6->kode) }})</a>
                                <i class="bi bi-check-circle"></i> {{ $pal6->teks}}
                            </li>
                            <li><a href="{{ url('part/'.$slug.'/'.$pal7->kode) }}">({{ strtoupper($pal7->kode) }})</a>
                                <i class="bi bi-check-circle"></i> {{ $pal7->teks}}
                            </li>
                            <li><a href="{{ url('part/'.$slug.'/'.$pal8->kode) }}">({{ strtoupper($pal8->kode) }})</a>
                                <i class="bi bi-check-circle"></i> {{ $pal8->teks}}
                            </li>
                        </ul>
                        <div class="mb-3">
                            <h4>VISI</h4>
                            <p><a href="{{ url('part/'.$slug.'/'.$visi->kode) }}">({{ strtoupper($visi->kode) }})</a>
                                {{ $visi->teks }}</p>
                        </div>
                        <div class="mb-5">
                            <h4>MISI</h4>
                            <p><a href="{{ url('part/'.$slug.'/'.$misi->kode) }}">({{ strtoupper($misi->kode) }})</a>
                                {{ $misi->teks }}</p>
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
                        <span data-purecounter-start="0" data-purecounter-end="{{ (int)$count1->link }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p><a href="{{ url('part/'.$slug.'/'.$count1->kode) }}" class="text-white">({{ strtoupper($count1->kode) }})</a> {{ $count1->teks }}</p>
                    </div>
                    <div class="col-lg-6 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ (int)$count2->link }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p><a href="{{ url('part/'.$slug.'/'.$count2->kode) }}" class="text-white">({{ strtoupper($count2->kode) }})</a> {{ $count2->teks }}</p>
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
                    @foreach ($dokumen as $item)
                    <div class="col-12 px-2 py-1" id="{{ $item->id}}">
                        <div class="d-flex">
                            <span class="btn btn-success me-1">{{ $loop->iteration }}</span>
                            <a href="{{ $item->link }}" class="btn btn-primary me-2">{{ $item->teks }}</a>
                            <a href="{{ url('part/'.$slug.'/'.$item->kode) }}" class="btn btn-warning me-2"><i class="bi bi-pencil"></i></a>
                            @if ($loop->iteration > 1)
                            <button data-hapus="{{ $item->id}}" data-url="{{ url('delete/'.$slug.'/'.$item->kode) }}" data-id="{{ $item->teks }}" type="button" class="btn btn-danger removelink"><i class="bi bi-trash"></i> </button>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-3">
                    <p class="d-inline-flex gap-1">
                        <button class="btn btn-warning rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-plus"> Link / URL</i>
                        </button>
                    </p>
                    <div class="collapse show" id="collapseExample">
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <div class="card card-body">
                                    <form id="formtambahlink" action="{{ url('store') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="mb-2">
                                            <label>Judul Link / Dokumen / Data</label>
                                            <input class="form-control" type="text" name="teks">
                                            <input class="d-none" type="text" name="slug" value="{{ $slug }}">
                                        </div>
                                        <div class="mb-2">
                                            <label>Link</label>
                                            <input class="form-control" type="text" name="link">
                                            <small>Masukan Link Bebas, boleh dari Google Drive, Google Doc, Google Sheet, atau pun dari Website lain</small>
                                        </div>
                                        <button type="button" class="btn btn-success rounded-4 tambahlink">Tambah LINK</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="{{ asset('assets') }}/sweetalert/sweetalert.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
                <script>
                    $(document).ready(function() {
                        $('.removelink').on('click', function(e) {
                            e.preventDefault();
                            teks = $(this).attr("data-id");
                            datahapus = $(this).attr("data-hapus");
                            dataurl = $(this).attr("data-url");
                            console.log(teks);
                            swal({
                                title: 'Yakin ingin menghapus link '+teks+' ?',
                                icon: 'warning',
                                buttons:{
                                    confirm: {
                                        text : 'Ya, Hapus Permanen',
                                        className : 'btn btn-success'
                                    },
                                    cancel: {
                                        visible: true,
                                        className: 'btn btn-danger'
                                    }
                                }
                                }).then((deleteAll) => {
                                    if (deleteAll) {
                                        $.ajax({
                                            url: ""+dataurl+"",
                                            type: 'DELETE',
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            success: function(data) {
                                                swal({
                                                    title: 'Proses Hapus Berhasil',
                                                    text: data.message,
                                                    type: 'success',
                                                    buttons : {
                                                        confirm: {
                                                            className : 'btn btn-success'
                                                        }
                                                    }
                                                });
                                                if (data['status'] == true) {
                                                    $("#"+datahapus).remove();
                                                    // $(".removelink").each(function() {
                                                    //     $(this).parents(".removehtml").remove();
                                                    // });
                                                    // alert(data['message']);
                                                } else {
                                                    alert('Error occured.');
                                                }
                                            },
                                            error: function(data) {
                                                alert(data.responseText);
                                            }
                                        });
                                    } else {
                                        swal.close();
                                    }
                                });
                        });


                        $('.tambahlink').on('click', function(e) {
                            e.preventDefault();
                            teks = $('input[name="teks"]').val();
                            link = $('input[name="link"]').val();
                            slug = $('input[name="slug"]').val();
                            if(teks == '' || link == '')
                            {
                                swal({
                                    title: 'ERROR',
                                    text: 'Kolom tidak boleh kosong!!!',
                                    icon: 'error',
                                    showConfirmButton: false,
                                    timer: 5000,
                                });
                                return;
                            }
                            var formData = {
                                '_token' : "{{ csrf_token() }}",
                                '_method' : "POST",
                                'teks' : teks,
                                'slug' : slug,
                                'link' : link
                            };
                            console.log($('#formtambahlink').serialize());
                            swal({
                                title: 'Tambah Link ?',
                                icon: 'info',
                                buttons:{
                                    confirm: {
                                        text : 'Ya, Tambah',
                                        className : 'btn btn-success'
                                    },
                                    cancel: {
                                        visible: true,
                                        className: 'btn btn-danger'
                                    }
                                }
                                }).then((tambahlink) => {
                                    if (tambahlink) {
                                        $.ajax({
                                            url: "{{ url('/store') }}",
                                            type: 'POST',
                                            data: formData,
                                            dataType : 'json',
                                            success: function(data) {
                                                swal({
                                                    title: 'Proses Tambah Berhasil',
                                                    text: data.message,
                                                    icon: 'success',
                                                    showConfirmButton: false,
                                                });
                                                if (data['status'] == true) {
                                                    // $("#datalink" ).load(window.location.href + " #datalink" );
                                                    window.location.href = "#datalink";
                                                    window.location.reload();
                                                    // $(".removelink").each(function() {
                                                    //     $(this).parents(".removehtml").remove();
                                                    // });
                                                    // alert(data['message']);
                                                } else {
                                                    alert('Error occured.');
                                                }
                                            },
                                            error: function (req, status, error) {
                                                var err = req.responseJSON;
                                                // console.log(err);
                                                swal({
                                                    title: 'ERROR',
                                                    text: err.message,
                                                    icon: 'error',
                                                    showConfirmButton: false,
                                                    timer: 5000,
                                                });
                                            }
                                        });
                                    } else {
                                        swal.close();
                                    }
                                });
                        });
                    }); 
                </script>

            </div>
        </section><!-- End Services Section -->
        
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
                            <p><a href="{{ url('part/'.$slug.'/'.$alamat->kode) }}"> ({{ strtoupper($alamat->kode) }})</a>
                                {!! $alamat->teks !!}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="{{ url('part/'.$slug.'/'.$email->kode) }}"> ({{ strtoupper($email->kode) }})</a>
                                {!! $email->teks !!}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>No HP</h3>
                            <p><a href="{{ url('part/'.$slug.'/'.$nohp->kode) }}"> ({{ strtoupper($nohp->kode) }})</a>
                                {!! $nohp->teks !!}</p>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-md-5" id="map">
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
                        <a href="{{ url('part/'.$slug.'/'.$footer1->kode) }}" class="text-white"> ({{ strtoupper($footer1->kode) }})</a>
                        <h3>{{ $footer1->teks }}</h3>
                        <a href="{{ url('part/'.$slug.'/'.$footer2->kode) }}" class="text-white"> ({{ strtoupper($footer2->kode) }})</a>
                        <p>
                            {!! $footer2->teks !!}<br>
                            <strong><a href="{{ url('part/'.$slug.'/'.$nohp->kode) }}" class="text-white"> ({{ strtoupper($nohp->kode) }})</a> Phone:</strong> {{ $nohp->teks }}<br>
                            <strong><a href="{{ url('part/'.$slug.'/'.$email->kode) }}" class="text-white"> ({{ strtoupper($email->kode) }})</a> Email:</strong> {{ $email->teks }}<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            @foreach ($footerlink as $item)
                            <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}" class="text-white"> ({{ strtoupper($item->kode) }})</a>
                                <i class="bx bx-chevron-right"></i> <a href="{{ $item->link }}">{{ $item->teks }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4><a href="{{ url('part/'.$slug.'/'.$footer3->kode) }}" class="text-white"> ({{ strtoupper($footer3->kode) }})</a>
                            {{ $footer3->teks }}</h4>
                        <p><a href="{{ url('part/'.$slug.'/'.$footer4->kode) }}" class="text-white"> ({{ strtoupper($footer4->kode) }})</a>
                            {{ $footer4->teks }}
                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>UPT TIPD IAKN Palangka Raya</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits d-none">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
    <a class="button-whatsapp {{ $whatsapp->link ? "" : "d-none" }}" href="{{ $whatsapp->link }}"><img src="{{ asset('assets/img_default/whatsapp-icon-logo-png.png') }}" alt=""></a>
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    {{-- <div id="preloader"></div> --}}

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