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
            <div class="card" style="width: 18rem; height:19rem;">
                <img src="{{asset('asset/web.png')}}" class="card-img-top gambar" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$service -> nama_service}}</h5>
                    <p class="card-text">{{$service->deskripsi}}</p>
                </div>
                <a href="#" class="btn  m-2">Pesan Skrng</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection