@extends('layout.app')
@section('content')

<head>
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
</head>

<div class="container-fluid about">
    <section class="container-fluid layout">
        <div class="hero">

        </div>
        <div class="hero2">
            <h3 class="about-header">Tentang Kami</h3>
            <p>Selamat datang di Adriantech! kami siap membantu kamu membuat website keren, simpel, dan sesuai kebutuhan. Kami berdedikasikan untuk membantu mahasiswa, pekerja profesional, dan siapa saja yang membutuhkan solusi digital berkualitas.</p><br>
            <p>Adriantech lahir dari ide sederhana: membantu teman-teman mahasiswa dan profesional yang butuh website tanpa ribet. Dengan pengalaman di dunia pengembangan web, kami nggak cuma bikin website, tapi juga bikin kamu puas!</p>
        </div>
    </section>
    <section class="container-fluid py-4 sub-content">
        <div class="container">
            <div class="col about-header text-center">
                <h3>Kami Hadir Dengan Misi</h3>
            </div>

            <div class="col d-flex justify-content-between my-4">
                <div class=" d-flex align-items-center gap-1">
                    <div class="display-3">
                        <i class="fa-solid fa-business-time"></i>
                    </div>
                    <p>Memberikan layanan pembuatan website yang mudah, cepat, dan terjangkau</p>
                </div>
                <div class=" d-flex align-items-center gap-1">
                    <div class="display-3">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <p> Bikin hidup kamu lebih gampang! Nggak perlu pusing soal coding atau desain, serahin aja ke kami</p>
                </div>
                <div class=" d-flex align-items-center gap-1">
                    <div class="display-3">
                        <i class="fa-solid fa-ear-listen"></i>
                    </div>
                    <p>Kami mendengarkan dan memastikan hasil sesuai ekspektasi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid layanan">
        <div class="container pb-4">
            <div class="col">
                <h3 class="about-header">Layanan Kami</h3>
            </div>
            <div class="row">
                <div class="col" data-aos="fade-right">
                    <img src="{{asset('asset/web.png')}}" class="card-img-top gambar" alt="...">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body px-4">
                            <h5 class="card-title text-light">Pembuatan Landing Page</h5>
                            <p class="card-text">Desain landing page modern dan responsif untuk memperkenalkan produk, layanan, atau portofolio Anda dengan profesional.</p>
                            <a href="#" class="btn btn-primary">Pesan Skrng</a>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-in">
                    <img src="{{asset('asset/web.png')}}" class="card-img-top gambar" alt="...">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body px-4">
                            <h5 class="card-title text-light">Website CRUD</h5>
                            <p class="card-text">Bangun website dengan fitur manajemen data sederhana yang sesuai untuk tugas kuliah atau proyek kerja Anda.</p>
                            <a href="#" class="btn btn-primary">Pesan Skrng</a>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-left">
                    <img src="{{asset('asset/algoritma.png')}}" class="card-img-top gambar" alt="...">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body px-4">
                            <h5 class="card-title text-light">Website Undangan Digital</h5>
                            <p class="card-text">Buat undangan pernikahan atau acara spesial Anda dengan desain elegan dan link yang mudah dibagikan.</p>
                            <a href="#" class="btn btn-primary">Pesan Skrng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid contact">
        <div class="container">
            <h1 class="mb-4">Punya ide? Butuh diskusi? Langsung aja kontak kami lewat WhatsApp, email, atau klik tombol chat!</h1>
            <div class="col">
                <section>
                    <form action="" class="form-contact">
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
                            <label class="form-label">Deskripsi</label>
                            <textarea id="deskripsi" rows="3" placeholder="ceritkan website impian kamu"></textarea>
                        </div>
                    </form>
                </section>
                <section class="cta-call">
                    <h3>Informasi Kontak</h3>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i> Bali, Indonesia</a></li>
                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i> +62 895-331-178-068</a></li>
                        <li><a href="#"><i class="fa-regular fa-envelope"></i> adriantech67@gmail.com</a></li>
                        <li><a href="#"><i class="fa-solid fa-clock"></i> Senin - Sabtu: 09:00 - 21:00 WITA </a></li>
                    </ul>
                    <h3>Ikuti Kami</h3>
                    <ul class="d-flex gap-3">
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>

                    </ul>
                </section>
            </div>
        </div>

    </div>
</div>

@endsection