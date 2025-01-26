@extends('layout.app')
@section('content')

<link rel="stylesheet" href="{{asset('css/service.css')}}">
<link rel="stylesheet" href="{{asset('css/layout.css')}}">

<div class="container-fluid hero-section">
    <div class="container">
        <div class="img-content">
            <img src="{{asset('asset/bg2.png')}}" alt="Layanan">
        </div>
        <div class="col side-content">
            <h2 class="head-text">
                {{$title}}
            </h2>
            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, impedit? Consequatur, quasi in. Eligendi, iure!</p> -->
        </div>
    </div>



    <div class="container service-content">

        @foreach ($services as $service)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('asset/web.png')}}" class="card-img-top gambar" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$service -> nama_service}}</h5>
                    <p class="card-text">{{$service->deskripsi}}</p>
                    <p>({{$service->alat}})</p>
                </div>
                <a href="#" class="btn  m-2">Pesan Skrng</a>
            </div>
        </div>

        @endforeach

    </div>

    <div class="container contact">
        <h3 class="mb-4">Punya ide? Butuh diskusi? Langsung aja kontak kami lewat WhatsApp, email, atau klik tombol chat!</h3>
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
@endsection