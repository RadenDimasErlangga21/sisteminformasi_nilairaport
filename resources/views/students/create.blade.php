@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/students" method="post" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                            <label for="nim">NIS</label>
                            <input type="text" class="form-control" required="required" name="nim"></br>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" required="required" name="name"></br>
                        </div>

                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <select class="form-control" name="Kelas">
                            @foreach($kelas as $class)
                            <option value="{{$class->id}}">
                                {{ $class->class_name }}
                            </option>
                            @endforeach
                            </select></br>
                        </div>
                        
                        <div class="form-group">
                            <label for="department">Jurusan</label>
                            <input type="text" class="form-control" required="required" name="department"></br>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Nomor HP</label>
                            <input type="text" class="form-control" required="required" name="phone_number"></br>
                        </div>

                        <div class="form-group">
                            <label for="photo">Foto Siswa</label>
                            <input type="file" class="form-control" required="required" name="photo"></br>
                        <div>

                        <div class="form-group">
                            <label for="Pemrograman_Berbasis_Objek">nilai Pemrograman Berbasis Objek</label>
                            <input type="text" class="form-control" required="required" name="Pemrograman_Berbasis_Objek"></br>
                        </div>

                        <div class="form-group">
                            <label for="Pemrograman_Web_Lanjut">nilai Pemrograman Web Lanjut</label>
                            <input type="text" class="form-control" required="required" name="Pemrograman_Web_Lanjut"></br>
                        </div>

                        <div class="form-group">
                            <label for="Basis_Data_Lanjut">nilai Basis Data Lanjut</label>
                            <input type="text" class="form-control" required="required" name="Basis_Data_Lanjut"></br>
                        </div>

                        <div class="form-group">
                            <label for="Praktikum_Basis_Data_Lanjut">nilai Praktikum Basis Data Lanjut</label>
                            <input type="text" class="form-control" required="required" name="Praktikum_Basis_Data_Lanjut"></br>
                        </div>

                        <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection