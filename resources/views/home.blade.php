@extends('layout.app')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>

<div class="container-fluid banner">
    <div class="container content">
        <div data-aos="zoom-out-down" data-aos-duration="2000" class="wrapper">
            <h1>Solusi Tepat Membuat Website Tanpa Ribet!</h1>
            <p>Bantu selesaikan tugas kuliah atau proyek pekerjaan Anda dengan website modern dan fungsional.</p>
        </div>
        <div class="col d-flex gap-4">
            <button class="cta-bottom">
                <a href="https://wa.me/62895331178068">Konsultasi Gratis</a>
            </button>
            <button class="cta-bottom-right">
                <a href="#portofolio">Lihat Portofolio</a>
            </button>
        </div>
    </div>
</div>

<section class="container-fluid layout" id="about">
    <div class="hero" data-aos="fade-left">

    </div>
    <div class="hero2">
        <h3 class="about-header" data-aos="zoom-in-left">Tentang Kami</h3>
        <p data-aos="zoom-in-left">Selamat datang di Adriantech! kami siap membantu kamu membuat website keren, simpel, dan sesuai kebutuhan. Kami berdedikasikan untuk membantu mahasiswa, pekerja profesional, dan siapa saja yang membutuhkan solusi digital berkualitas.</p><br>
        <!-- <p>Adriantech lahir dari ide sederhana: membantu teman-teman mahasiswa dan profesional yang butuh website tanpa ribet. Dengan pengalaman di dunia pengembangan web, kami nggak cuma bikin website, tapi juga bikin kamu puas!</p> -->
    </div>
</section>

<div class="container-fluid keunggulan">
    <div class="container">
        <div class="text-header text-center">
            <h2 data-aos="zoom-out-up">Misi Kami</h2>
        </div>

        <div class="row">
            <div class="col d-flex align-items-center gap-2" data-aos="zoom-in-up">
                <div class="display-4">
                    <i class="fa-solid fa-business-time"></i>
                </div>
                <p>Memberikan layanan pembuatan website yang mudah, cepat, dan terjangkau</p>
            </div>
            <div class="col d-flex align-items-center gap-2" data-aos="zoom-in-up">
                <div class="display-4">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <p> Bikin hidup kamu lebih gampang! Nggak perlu pusing soal coding atau desain, serahin aja ke kami</p>
            </div>
            <div class="col d-flex align-items-center gap-2" data-aos="zoom-in-up">
                <div class="display-4">
                    <i class="fa-solid fa-ear-listen"></i>
                </div>
                <p>Kami mendengarkan dan memastikan hasil sesuai ekspektasi.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid layanan" id="layanan">
    <div class="container ">
        <div class="text-header text-center" data-aos="zoom-out-up">
            <h2>Services</h2>
            <p>Kami Menyediakan Beberapa Layanan</p>
        </div>
        <div class="row">
            @if($services->count() > 0)
            <div class="col" data-aos="zoom-out-down">
                <div class="card" style="width: 19rem; ">

                    <img src="{{ asset('asset/landing-page.png') }}" class="img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $services[0]->nama_service }}</h5>
                        <p class="card-text">{{ $services[0]->deskripsi }}</p>
                        <p>({{ $services[0]->alat }})</p>
                    </div>
                    <a href="#" class="btn m-2">Pesan Skrng</a>
                </div>
            </div>

            <div class="col" data-aos="zoom-out-down" data-aos-duration="600">
                <div class="card" style="width: 19rem; ">
                    <img src="{{ asset('asset/database.png') }}" class="img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $services[1]->nama_service }}</h5>
                        <p class="card-text">{{ $services[1]->deskripsi }}</p>
                        <p>({{ $services[1]->alat }})</p>
                    </div>
                    <a href="#" class="btn m-2">Pesan Skrng</a>
                </div>
            </div>

            <div class="col" data-aos="zoom-out-down" data-aos-duration="900">
                <div class="card" style="width: 19rem; ">
                    <img src="{{ asset('asset/greeting.png') }}" class="img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $services[2]->nama_service }}</h5>
                        <p class="card-text">{{ $services[2]->deskripsi }}</p>
                        <p>({{ $services[2]->alat }})</p>
                    </div>
                    <a href="#" class="btn m-2">Pesan Skrng</a>
                </div>
            </div>

            <div class="col" data-aos="zoom-out-down" data-aos-duration="1100">
                <div class="card" style="width: 19rem; ">
                    <img src="{{asset('asset/design-web.png')}}" alt="web-design" class="img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $services[3]->nama_service }}</h5>
                        <p class="card-text">{{ $services[3]->deskripsi }}</p>
                        <p>({{ $services[3]->alat }})</p>
                    </div>
                    <a href="#" class="btn m-2">Pesan Skrng</a>
                </div>
            </div>
            @else
            <p>Tidak ada layanan yang tersedia.</p>
            @endif




        </div>

        <div class="col mt-4 col-bottom">
            <a href="#" class="nav-link fs-5 service-link" data-aos="fade-right">Lihat Semua Layanan</a>
            <button class="cta-bottom" data-aos="fade-left">
                <a href="https://wa.me/62895331178068">konsultasi Gratis</a>
            </button>
        </div>
    </div>
</div>

<div class="container-fluid portofolio" id="portofolio">

    <div class="container">
        <div class="text-header" data-aos="fade-right">
            <h2>Portofolio</h2>
            <p>Beberapa Project Website Yang Kami Buat</p>

        </div>
        <div class="row">
            <div class="card" data-aos="zoom-in">
                <div class="gambar proyek">
                    <img src="{{asset('asset/ladingPage.png')}}" alt="portofolio" style="width:100%">

                    <div class="overlay" id="overlay">
                        <a href="" class="overlay-text" id="overlayText">Lihat Detail</a>
                    </div>
                </div>
                <div class="card-content">
                    <p class="card-title">Landing Page Simple</p>
                    <p class="card-para">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit.</p>
                    <span class="d-flex gap-4">
                        <p>Laravel</p>
                        <p>Javascript</p>
                        <p>MySQL</p>
                    </span>
                </div>
            </div>
            <div class="card" data-aos="zoom-in">
                <div class="gambar proyek">
                    <img src="{{asset('asset/CRUD.png')}}" alt="portofolio" style="width:100%">

                    <div class="overlay" id="overlay">
                        <a href="" class="overlay-text" id="overlayText">Lihat Detail</a>
                    </div>
                </div>
                <div class="card-content">
                    <p class="card-title">Website CRUD
                    </p>
                    <p class="card-para">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit.</p>
                    <span class="d-flex gap-4">
                        <p>Laravel</p>
                        <p>Javascript</p>
                        <p>MySQL</p>
                    </span>
                </div>
            </div>
            <div class="card" data-aos="zoom-in">
                <div class="gambar proyek">
                    <img src="{{asset('asset/tes.png')}}" alt="" style="width:100%">

                    <div class="overlay" id="overlay">
                        <a href="" class="overlay-text" id="overlayText">Lihat Detail</a>
                    </div>
                </div>
                <div class="card-content">
                    <p class="card-title">Card hover effect
                    </p>
                    <p class="card-para">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit.</p>
                    <span class="d-flex gap-4">
                        <p>Laravel</p>
                        <p>Javascript</p>
                        <p>MySQL</p>
                    </span>
                </div>
            </div>
        </div>
        <div class="col text-center" width="100%">
            <button class="btn-project" data-aos="zoom-in">
                <a href="#">Mulai Project Anda -></a>
            </button>
        </div>
    </div>

</div>

<!-- <div class="container-fluid testimoni" id="testimoni">
    <div class="container">
        <div class="text-header">
            <h2>Testimoni</h2>
            <p>Dengarkan lansung Kata Mereka</p>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body px-4">
                        <h5 class="card-title text-light">Pembuatan Landing Page</h5>
                        <p class="card-text">Desain landing page modern dan responsif untuk memperkenalkan produk, layanan, atau portofolio Anda dengan profesional.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body px-4">
                        <h5 class="card-title text-light">Pembuatan Landing Page</h5>
                        <p class="card-text">Desain landing page modern dan responsif untuk memperkenalkan produk, layanan, atau portofolio Anda dengan profesional.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body px-4">
                        <h5 class="card-title text-light">Pembuatan Landing Page</h5>
                        <p class="card-text">Desain landing page modern dan responsif untuk memperkenalkan produk, layanan, atau portofolio Anda dengan profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid contact" id="contact">
    <div class="container">
        <h2 data-aos="zoom-in">Punya ide? Butuh diskusi? Langsung aja kontak kami lewat WhatsApp, email, atau klik tombol chat!</h2>

        <div class="col">
            <form action="" class="form-contact" data-aos="fade-right">
                <div class="mb-3 d-flex flex-column">
                    <label class="form-label">Nama</label>
                    <input type="text" id="nama" placeholder="Nama Anda">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label class="form-label">No Hp</label>
                    <input type="email" id="nomor" placeholder="Nomor aktif/WA">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label class="form-label">Email</label>
                    <input type="number" id="email" placeholder="nama@example.com">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label class="form-label">Pesan</label>
                    <textarea id="deskripsi" rows="3" placeholder="Tulis Pesan Anda Disini"></textarea>
                </div>
                <div class="mb-3">
                    <div class="btn btn-info">Kirim Pesan</div>
                </div>
            </form>

            <section class="cta-call">
                <h3 data-aos="fade-left">Informasi Kontak</h3>
                <ul data-aos="fade-left">
                    <li><i class="fa-solid fa-location-dot"></i> Bali, Indonesia</li>
                    <li><i class="fa-brands fa-whatsapp"></i> +62 895-331-178-068</li>
                    <li><i class="fa-regular fa-envelope"></i> adriantech67@gmail.com</li>
                    <li><i class="fa-solid fa-clock"></i> Senin - Sabtu: 09:00 - 21:00 WITA </li>
                </ul>
                <h3 data-aos="fade-left" data-aos-duration="700">Ikuti Kami</h3>
                <ul class="d-flex gap-3" data-aos="fade-left" data-aos-duration="700">
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>

                </ul>
            </section>
        </div>
    </div>

</div>


<footer class="container-fluid">
    <div class="container">
        <section>
            <div class="col">
                <img src="{{asset('asset/ADRIANTECH_LOGO2.png')}}" alt="" width="200" height="30" class="mb-2">
                <p>Menyelesaikan Tugas Pembuatan Website Kamu</p>
                <div class="side gap-5">
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </section>
        <section>
            <div class="col">
                <h3>layanan kami</h3>

                <li><a href="#layanan">Pembuatan landing Page</a></li>
                <li><a href="#layanan">Website CRUD Sederhana</a></li>
                <li><a href="#layanan">Website Undangan Digital</a></li>
                <li><a href="#layanan">Redesign Website</a></li>

            </div>
        </section>

    </div>
    <p class="text-center">&copy; 2025 ADRIANTECH. Hak Cipta Dilindungi </p>
</footer>


@endsection