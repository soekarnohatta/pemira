<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Voting | MPK OSIS SMAIA 19</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/') ?>bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/') ?>frontend-style.css" />
</head>

<!--
<body>
    <div class="site-wrap">
        <div class="site-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <span class="d-block mb-3 caption" data-aos="fade-up" data-aos-delay="100">Welcome!</span>
                        <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="200">
                            E-Voting <br />
                            SMAIA 19
                        </h1>
                        <span class="d-block mb-5 caption" data-aos="fade-up" data-aos-delay="300">Login untuk melanjutkan</span>
                        <a href="<?php echo site_url('user') ?>" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>Login</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/') ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url('assets/js/') ?>popper.min.js"></script>
    <script src="<?php echo base_url('assets/js/') ?>bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/js/') ?>aos.js"></script>
    <script src="<?php echo base_url('assets/js/') ?>main.js"></script>
</body>
-->

<body class="d-flex flex-column min-vh-100">
            
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="navbar-brand">
                <a href="/">
                    <img alt="logo" height="50" src="/assets/img/logo-pus.png" href="/">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <a class="btn btn-outline-primary ms-auto d-lg-inline-block my-2 my-md-0" href="/user">Masuk</a>
                </ul>
            </div>
        </div>
    </nav>
     
            <div id="flash-container">
                
            </div>

            <div class="container main-container">
                
    <section class="home">
        <div class="container px-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <!-- <img src="/assets/img/ltmpt-sponsor.png" alt="sponsor" class="img-fluid"> -->
                    <marquee>
                    PEMILIHAN UMUM KETUA OSIS SMA ISLAM AL AZHAR 19 CIRACAS *** APABILA ADA KENDALA SEGERA HUBUNGI PANITIA TERKAIT *** GUNAKAN AKUN SIDU UNTUK MURID *** DILARANG MENGGUNAKAN AKUN ORANG LAIN *** SEGALA MACAM KECURANGAN TERDETEKSI DAN AKAN DIPROSES            
                    </marquee>
                    <h1 class="display-5 fw-bold my-3">E-Vote Caketos dan Cawaketos 2022/2023 SMAIA 19</h1>
                    <div class="row gap-3 gap-lg-0">
                        <div class="col-lg-12 mb-3">
                            <p class="lead">Belum memiliki akun? Gunakan akun SIDU atau hubungi <a href="https://wa.me/6281310729415">admin</a> jika ada masalah. Dilarang melakukan kecurangan!</p>
                            <a class="btn btn-primary px-4" href="/user">Masuk</a>
                        </div>
                        <div class="col-12 mt-2 d-lg-none mb-3">
                            <hr class="my-0">
                        </div>
                        <div class="col-lg-12 d-lg-none">
                            <p class="lead">Sudah memiliki akun?</p>
                            <a class="btn btn-outline-primary px-4" href="/user">Masuk</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-inline-flex justify-content-center">
                    <img src="/assets/img/illustration-landing.png" alt="landing-img" width="350" class="img-fluid">
                </div>
            </div>
        </div>

        <hr>

        <div class="container px-5 mt-5">
            <div class="row">
                <div class="col-9 col-lg-11 mb-3">
                    <h3>Pengumuman</h3>
                </div>

                <div class="col-3 col-lg mb-3 text-right">
                    <button type="button" class="btn btn-sm btn-outline-dark" data-bs-slide="prev" data-bs-target="#carouselExampleCaptions">
                        <i class="fa fa-arrow-circle-left"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-outline-dark" data-bs-slide="next" data-bs-target="#carouselExampleCaptions">
                       <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>

                <div class="col-lg-12 mt-10">
                    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h5>Batas Akhir Registrasi Akun</h5>
                                <p>Registrasi akun siswa, penentuan kandidat eligible, dan pengisian data ditutup pada 27 Oktober 2022 pukul 12.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        


    </section>

            </div>

            


<footer class="footer mt-auto py-3 bg-light border-top">
    <div class="container px-5">
        <p class="m-0 text-muted">
            © 2022 Pusdatin OSIS SMAIA 19. <em>v1.0.0</em>.
            <a href="https://storyset.com/online" class="text-muted text-decoration-none">Ilustrasi oleh Storyset</a>.
        </p>
    </div>
</footer>


            
        
<script src="<?php echo base_url('assets/js/') ?>jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('assets/js/') ?>bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/') ?>frontend.js"></script>
</body>
</html>
