@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <img src="../assets/img/ss1.jpg" style="width:787px;height:390px;">

                    <h3 align="justify"> selamat datang di sistem informasi nilai raport </h3>
                    <p align="justify">
                    Studi Kasus Sistem Informasi Nilai Raport ini dibuat sebagai proyek tugas akhir kelas 2E jurusan teknologi informasi, 
                    prodi D-III Manajemen Informatika. Pembuatan tugas ini menggunakan referensi tugas-tugas kuliah dan mencoba untuk 
                    eksplorasi lebih lanjut dari tugas-tugas yang diberikan selama perkuliahan dalam mata kuliah pemrograman web lanjut, 
                    yang dimana hal ini bertujuan untuk menjadi bahan penelitian mahasiswa mengenai praktikum Laravel, sehingga mahasiswa 
                    dapat membuat sebuah situs Laravel yang berfungsi serta dapat mengatasi masalah error yang terjadi pada pembuatan 
                    proyek Sistem Informasi Nilai Raport ini.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
