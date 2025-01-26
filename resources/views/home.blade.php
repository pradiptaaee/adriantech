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
        <div class="col gap-4">
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
                    </div>
                    <a href="#" class="btn m-3">Pesan Skrng</a>
                </div>
            </div>
            <div class="col" data-aos="fade-in">
                <img src="{{asset('asset/web.png')}}" class="card-img-top gambar" alt="...">
                <div class="card" style="width: 18rem;">
                    <div class="card-body px-4">
                        <h5 class="card-title text-light">Website CRUD</h5>
                        <p class="card-text">Bangun website dengan fitur manajemen data sederhana yang sesuai untuk tugas kuliah atau proyek kerja Anda.</p>
                    </div>
                    <a href="#" class="btn m-3">Pesan Skrng</a>
                </div>
            </div>
            <div class="col" data-aos="fade-left">
                <img src="{{asset('asset/algoritma.png')}}" class="card-img-top gambar" alt="...">
                <div class="card" style="width: 18rem;">
                    <div class="card-body px-4">
                        <h5 class="card-title text-light">Website Undangan Digital</h5>
                        <p class="card-text">Buat undangan pernikahan atau acara spesial Anda dengan desain elegan dan link yang mudah dibagikan.</p>
                    </div>
                    <a href="#" class="btn m-3">Pesan Skrng</a>
                </div>
            </div>
        </div>

        <div class="col mt-4 col-bottom">
            <a href="{{route('service.index')}}" class="fs-5">Lihat Semua Layanan</a>
            <button class="cta-bottom">
                <a href="https//wa.me">Hubungi kami</a>
            </button>
        </div>
    </div>
</div>

<div class="container-fluid portofolio">

    <div class="container">
        <div class="text-header">
            <h2>Portofolio</h2>
            <p>Saat ini bemum ada Project yg kami buat.</p>
            <div class="col">
                <button><a href="#">Mulai Project Anda -></a></button>
            </div>
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

<div class="container-fluid testimoni">
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
</div>

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
                    <div class="mb-3">
                        <div class="btn btn-info">Kirim Pesan</div>
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

<footer class="container-fluid text-center">
    <div class="container">
        <section class="d-flex justify-content-between">
            <img src="{{asset('asset/ADRIANTECH_LOGO2.png')}}" alt="" width="300">
            <div class="side display-5 gap-5">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
        </section>
        <p>&copy; 2025 PT. ADRIANTA ENTERPRISE. </p>
        <p>Menyelesaikan Tugas Pembuatan Website Kamu</p>
    </div>
</footer>


@endsection