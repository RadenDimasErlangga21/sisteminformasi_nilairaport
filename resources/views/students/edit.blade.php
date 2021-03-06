@extends('layouts.appedit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/students/{{$student->id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$student->id}}"></br>
                        
                        <div class="form-group">
                            <label for="nim">NIS</label>
                            <input type="text" class="form-control" required="required" name="nim" value="{{$student->nim}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" required="required" name="name" value="{{$student->name}}"></br>
                        </div>

                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <select class="form-control" name="Kelas">
                            @foreach($kelas as $class)
                            <option value="{{$class->id}}" {{ $student->class_id == $class->id ? "selected":"" }}>
                            {{ $class->class_name}}
                            </option>
                            @endforeach
                            </select></br>
                        </div>

                        <div class="form-group">
                            <label for="department">Jurusan</label>
                            <input type="text" class="form-control" required="required" name="department" value="{{$student->department}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Nomor HP</label>
                            <input type="text" class="form-control" required="required" name="phone_number" value="{{$student->phone_number}}"></br>
                        </div>

                        <div class="form-group">
                            <label for="photo">Foto Siswa</label>
                            <input type="file" class="form-control" required="required" name="photo" value="{{$student->photo}}"></br>
                            <img width="150px" src="{{asset('storage/'.$student->photo)}}">
                        </div>

                        <!--
                        @foreach($student->courses as $cs)
                        <div class="form-group">
                        <tr>
                        <label for="nilai">Nilai</label>
                            <td>{{ $cs->course_name }}</td>
                            <input type="text" class="form-control" required="required" name="nilai" value="{{ $cs->pivot->nilai }}"></br>
                        </div>
                        @endforeach
                        -->
                        
                        <div class="form-group">
                            <label for="Pemrograman_Berbasis_Objek">nilai Pemrograman Berbasis Objek</label>
                            <input type="text" class="form-control" required="required" 
                            name="Pemrograman_Berbasis_Objek" value="{{$student->Pemrograman_Berbasis_Objek}}"></br>
                        </div>

                        <div class="form-group">
                            <label for="Pemrograman_Web_Lanjut">nilai Pemrograman Web Lanjut</label>
                            <input type="text" class="form-control" 
                            required="required" name="Pemrograman_Web_Lanjut" value="{{$student->Pemrograman_Web_Lanjut}}"></br>
                        </div>

                        <div class="form-group">
                            <label for="Basis_Data_Lanjut">nilai Basis Data Lanjut</label>
                            <input type="text" class="form-control" required="required" 
                            name="Basis_Data_Lanjut" value="{{$student->Basis_Data_Lanjut}}"></br>
                        </div>

                        <div class="form-group">
                            <label for="Praktikum_Basis_Data_Lanjut">nilai Praktikum Basis Data Lanjut</label>
                            <input type="text" class="form-control" required="required" 
                            name="Praktikum_Basis_Data_Lanjut" value="{{$student->Praktikum_Basis_Data_Lanjut}}"></br>
                        </div>
                        
                        <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection