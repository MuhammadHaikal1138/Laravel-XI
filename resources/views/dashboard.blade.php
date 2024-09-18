@extends('Layout.layout')

@section('title')
    <title>Home</title>
@endsection


@section('main')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
    </head>
    <body>
        <div class="isi">
            <div class="muncul">
                <div class="text-center">
                    <h1>Selamat Datang</h1>
                    <h3>SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD.</h3>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection