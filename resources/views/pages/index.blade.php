@extends('layouts.app')

@section('content')
<header>
<div class="jumbotron" style="background-size: cover; background-image: url('{{asset('img/charity.jpg')}}'); pading: 0; margin: 0;"">
    <div class="container text-center h-100" style="">
        <br>
        <br>
        <h1 style="color: white; font-weight: bold;">Galang Dana untuk Hal yang 
        <br>Anda Perjuangkan</h1>
        <br>
        <button type="button" href="#" class="btn btn-danger btn-lg font-weight-bold" role="button" data-toggle="modal" data-target="#exampleModalCenter">Galang Dana Sekarang</button>
        <a class="btn btn-success btn-lg font-weight-bold" href="#" role="button">Konsultasi Galang Dana Medis</a>
    </div>
</div>
</header>
<div class="slider" style="pading: 0; margin: 0; background-color: #f2f4f7; height: 400px;">
<br>
<br>
    <div class="container" style="margin: auto;">
        <div class="row">
            <div class="col-xl-3">
                <h1 class="font-weight-bold">Website Galang Dana #2 di Indonesia</h1>
                <p class="font-weight-bold">Cerita mereka yang sukses menggalang dana</p>
                <br>
                <a type="button "class="btn btn-primary font-weight-bold" href="#" data-toggle="modal" data-target="#exampleModalCenter" >Mulai Galang Dana<a>
            </div>
            <div class="col-xl-9">
                
            </div>
        </div>
    </div>
</div>
<br>
<div class="container text-center">
    <h1 class="font-weight-bold">Siap Memberi Bantuan ?</h1>
    <p class="font-weight-bold">Halo #OrangBaik, pilih campaign yang ingin Anda bantu</p>
</div>
<br>
@endsection
