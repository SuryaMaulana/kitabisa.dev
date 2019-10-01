<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kitabisa.dev - Indonesia's Fundraising Platform</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        
        
    </head>
    <body style="background-size: cover; background-image: url('{{asset('img/car-regis-bg.jpg')}}'); background-repeat: no-repeat; ">
    <div class="container text-center" style="margin-top: 200px;">
        <div style="">
            <p class="display-4 font-weight-bold text-white">Registration</p>
            <br>
            <p class="font-weight-bold text-white" style="font-size: 15px;">Hey, sebelum menggunakan web ini silahkan terlebih dahulu memilih peran anda</p>
            <br>
            <div class=row>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" class="btn font-weight-bold btn-lg btn-block" style="background-color: #235789; color: #d0d654;">Registrasi Customer</button>
                </div>
                <div class="col-sm-4">
                    <p class="font-weight-bold text-white" style="text-align: left;">Custumer adalah pihak yang dapat melakukan penyewaan kendaraa mobil</p>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <br>
            <div class=row>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" class="btn font-weight-bold btn-lg btn-block" style="background-color: #235789; color: #d0d654;">Registrasi Owner</button>
                </div>
                <div class="col-sm-4">
                    <p class="font-weight-bold text-white" style="text-align: left;">Owner adalah pihak yang dapat melakukan menyewakan mobik</p>
                </div>
                <div class="col-sm-2"></div>
            </div>
        <div>

    </div>


    
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>