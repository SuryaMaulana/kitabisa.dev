@extends('layouts.app')

@section('content')

<div style="background-color: #f2f3f4;">
<br>
<div class="container">
    <h1 class="font-weight-bold">#{{$post->judul}}</h1>
    <div class="row">
        <div class="col-xl-8">
            <img src="https://img.kitabisa.cc/size/664x357/6389bd4b-7d40-43c0-b5fe-963322757082.jpg">
            <br>
            <br>
            <h3>{{$post->ajakan}}</h3>
        </div>
        <div class="col-xl-4">
            <h1>Rp#</h1>
            <p class="font-weight-bold">Open Goal</p>
            <a class="btn btn-danger btn-lg btn-block font-weight-bold text-white" style="background-color: #dd3b77">DONASI SEKARANG</a>
            <a class="btn btn-lg btn-block font-weight-bold text-white" style="background-color: #2d4fd8"># SHARES</a>
            <br>
            <div>
            <p>Penggalangan dana dimulai <strong>{{$post->created_at}}</strong> Oleh</p>
            <hr>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-12 bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <a class="navbar-brand" href="#">Detail</a>
                <a class="navbar-brand" href="#">Update</a>
                <a class="navbar-brand" href="#">Fundraiser</a> 
            </nav>
        </div>
    </div>
    <div class="row" style="height: 10000px;">
        <div class="col-xl-8">
            {{$post->deskripsi}}
        </div>
        <div class="col-xl-4">
            <h3 class="font-weight-bold">Donatur</h3>
           
        </div>
    </div>
</div>    


@endsection