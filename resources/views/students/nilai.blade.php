@extends('layouts.appedit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" align="center"><b>{{ __('SMK TEKNIK RADEN MALANG') }}</b></div>
                <div class="card-body">
                    <center>
                        <b>{{ __('KARTU HASIL STUDI (KHS)') }}</b>
                    </center>
                    
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="card-body">
                        Nama : {{ $student->name }} <br> 
                        NIS : {{ $student->nim }} <br> 
                        Kelas : {{ $student->kelas->class_name }} <br>
                        Jurusan : {{ $student->department }} <br>
                    </div>

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Mata Pelajaran</th>
                                <th>Semester</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Pemrograman berbasis objek</td>
                            <td> 3</td>
                            <td>{{$student->Pemrograman_Berbasis_Objek}}</td> 
                            </tr>

                            <tr>
                            <td>Pemrograman Web Lanjut</td>
                            <td> 3 </td>
                            <td>{{$student->Pemrograman_Web_Lanjut}}</td>
                            </tr>

                            <tr>
                            <td>Basis Data Lanjut</td>
                            <td> 3 </td>
                            <td>{{$student->Basis_Data_Lanjut}}</td>
                            </tr>

                            
                            <tr>
                            <td>Praktikum Basis Data Lanjut</td>
                            <td> 3 </td>
                            <td>{{$student->Praktikum_Basis_Data_Lanjut}}</td>
                            </tr>

                        </tbody>
                    </table>
                    <a href="/students/{{$student->id}}/report" class="btn btn-primary" target="_blank">PRINT PDF</a>
                    <a href="/students" class="btn btn-warning">KEMBALI KE CRUD</a>
                    <br><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection