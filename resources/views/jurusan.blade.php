@extends('layout.layout')

@section('title')
    <title>landing</title>
@endsection

@section('main')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/jurusan.css') }}">
    </head>

    <body>
        <div class="jumbotron">
            <div class="text text-center">
                <h1>Jurusan</h1>
                <h5>Jurusan adalah bagian dari suatu fakultas atau sekolah tinggi yang bertanggung jawab untuk mengelola dan
                    mengembangkan suatu bidang studi.</h5>
                <h5>Berikut adalalah beberapa jurusan yang ada di wikrama</h5>
                <button for="btn-jurusan" class="btn btn-primary"><a href="#isi">Lihat</a></button>
            </div>
        </div>
        <div id="isi">
            <div class="judul text-center">
                <h3>Jurusan di Wikrama Bogor</h3>
            </div>
            <div class="kartu">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/pplg.jpg')}}" class="card-img-top" alt="..." style="height: 210px">
                    <div class="card-body">
                        <h5 class="card-title">PPLG (Pengembangan Perangkat Lunak dan Gim)</h5>
                        <p class="card-text">Memiliki kemampuan menjelaskan dan menerapkan ilmu matematika dan ilmu komputer dasar sebagai basis pembangunan sebuah perangkat lunak yang berkualitas.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/dkv.jpg')}}" class="card-img-top" alt="..." style="height: 210px">
                    <div class="card-body">
                        <h5 class="card-title">DKV (Desain Komunikasi Visual)</h5>
                        <p class="card-text">Pompetensi keahlian Desain Komunikasi Visual atau DKV sebelumnya bernama kompetensi keahlian Multimedia, menjawab tantangan perkembangan komunikasi visual, desain grafis dan multimedia.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/tjkt.jpg')}}" class="card-img-top" alt="..." style="height: 210px">
                    <div class="card-body">
                        <h5 class="card-title">TJKT (Teknik Jaringan Komputer dan Telekomunikasi)</h5>
                        <p class="card-text">Peserta didik mampu menjadi seorang teknisi jaringan, administrasi jaringan, network engineer dan menguasai komunikasi.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/kuliner.png')}}" class="card-img-top" alt="..." style="height: 210px">
                    <div class="card-body">
                        <h5 class="card-title">Kuliner</h5>
                        <p class="card-text">Jurusan Kuliner merupakan salah satu jurusan atau kompetensi yang memberikan Pelajaran di bidang Pengolahan dan Penyajian Makanan baik oriental maupun kontinental.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/mplb.jpg')}}" class="card-img-top" alt="..." style="height: 210px">
                    <div class="card-body">
                        <h5 class="card-title">MPLB (Manajemen Perkantoran dan Layanan Bisnis)</h5>
                        <p class="card-text">Mengetik cepat dengan teknik 10 jari dengan rata-rata kecepatan 250 EPM 98%, mengelola dokumen dan arsip kantor, menangani telepon, mengelola keuangan dan mampu menangani tamu</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/perhotelan.png')}}" class="card-img-top" alt="..." style="height: 210px">
                    <div class="card-body">
                        <h5 class="card-title">Perhotelan</h5>
                        <p class="card-text">Pengetahuan pariwisata, layanan telepon operator, layanan bellboy/porter, layanan reservasi, layanan resepsionis, layanan dokumen transaksi keuangan, layanan houskeeping meliputi layanan kamar, public area dan loundry (binatu)</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/pmn.png')}}" class="card-img-top" alt="..." style="height: 210px">
                    <div class="card-body">
                        <h5 class="card-title">Pemasaran</h5>
                        <p class="card-text">membuat desain untuk bisnis sendiri, creative content (berbasis media sosial/website), website berbasis toko online dengan bahasa pemrograman sederhana dan soft skill yang terdiri dari komunikasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
