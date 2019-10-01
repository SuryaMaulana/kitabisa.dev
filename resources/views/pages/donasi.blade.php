@extends('layouts.app')

@section('content')
<div style="background-color: #f2f4f7;">
    <br>
    <br>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <h5 class="font-weight-bold">Halo #OrangBaik, 
                    <br>Pilih campaign yang ingin Anda bantu</h5>
                </div>
                <div class="col-xl-6">
                </div>
            </div>
        </div>
    <br>
    <br>
    <hr>
    <div class="container">
        <small class="font-weight-bold">Menampilkan # campaign dari semua campaigner</small>
        <br>
        <div class="row">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                {{-- <div class="card-deck">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->judul}}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">{{$post->updated_at}}</small></p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-4">
                <br>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://designshack.net/wp-content/uploads/placeholder-image.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->judul}}</h5>
                            <p class="card-text">{{$post->ajakan}}</p>
                            <a href="/donasi/{{$post->id}}" class="btn btn-primary">Donasi Sekarang</a>
                            {{-- <a href="{{ url('/donasi/'.$post->url)}}" class="btn btn-primary">Donasi Sekarang</a> --}}
                        </div>
                        <div class="card-footer">
                            <small>{{$post->updated_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Belum ada donasi</p>    
        @endif
        </div>
    <div>


    {{-- <div class="container">
        <small class="font-weight-bold">Menampilkan # campaign dari semua campaigner</small>
        <br>
        <div class="card-deck">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
