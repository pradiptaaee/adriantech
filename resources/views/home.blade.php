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
        <div class="col">
            <button data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" class="cta-bottom">
                <a href="#">Konsultasi Gratis</a>
            </button>
            <button data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" class="cta-bottom">
                <a href="#">Lihat Portofolio</a>
            </button>
        </div>
    </div>
</div>

<div class="container-fluid keunggulan">
    <h2 data-aos="fade-right">Kami Menawarkan</h2>
    <div class="container d-flex justify-content-between py-4">
        <p data-aos="fade-up-right" data-aos-duration="500">Kami memahami kebutuhan mahasiswa dan profesional, memberikan solusi yang sesuai dan terjangkau.</p>
        <p data-aos="fade-up-right" data-aos-duration="1000">Kami menjamin pengerjaan tepat waktu sesuai deadline Anda</p>
        <p data-aos="fade-up-right" data-aos-duration="1500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati at, pariatur vel asperiores enim eum. Commodi nam beatae voluptates quis.</p>
    </div>
</div>

<div class="container-fluid layanan">
    <div class="container ">
        <div class="text-header text-center">
            <h2>Services</h2>
            <p>Kami Menyediakan Beberapa Layanan</p>
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

        <div class="col mt-4 col-bottom">
            <a href="#" class="fs-5">Lihat Semua Layanan</a>
            <button class="cta-bottom">
                <a href="#">Hubungi kami</a>
            </button>
        </div>
    </div>
</div>

<div class="container-fluid portofolio">

    <div class="container">
        <div class="text-header">
            <h2>Portofolio</h2>
            <p>Saat ini bemum ada Project yg kami buat.</p>
        </div>
        <!-- <div class="card">
            <div class="card-content">
                <p class="card-title">Card hover effect
                </p>
                <p class="card-para">Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <p class="card-title">Card hover effect
                </p>
                <p class="card-para">Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <p class="card-title">Card hover effect
                </p>
                <p class="card-para">Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit.</p>
            </div>
        </div> -->
    </div>
</div>

<div class="container-fluid contact">
    <div class="container">
        <section>
            <h1>Ayo Bekerja Dengan Kami!</h1>
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
        <section>
            <h3><a href="#"><i class="fa-brands fa-whatsapp"></i>   089-533-117-8068</a></h3>
            <h3><a href="#"><i class="fa-regular fa-envelope"></i>  adriantech67@gmail.com</a></h3>
        </section>

    </div>
</div>

<footer class="container-fluid text-center">
    <section class="d-flex justify-content-between">
        <img src="{{asset('asset/ADRIANTECH_LOGO2.png')}}" alt="" width="200">
        <h1>sosial meida</h1>
    </section>
    <h3>&copy; 2025 PT. ADRIANTA ENTERPRIE. </h3>
</footer>

@endsection