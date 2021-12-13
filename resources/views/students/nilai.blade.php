@extends('layouts.app')

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
                        Name : {{ $student->name }} <br> 
                        NIM : {{ $student->nim }} <br> 
                        Class : {{ $student->kelas->class_name }} <br>
                        Department : {{ $student->department }} <br>
                    </div>

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Materi</th>
                                <th>Semester</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student->courses as $cs)
                            <tr>
                                <td>{{ $cs->course_name }}</td>
                                <td>{{ $cs->semester }}</td>
                                <td>{{ $cs->pivot->nilai }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/students/{{$student->id}}/report" class="btn btn-primary" target="_blank">PRINT PDF</a>
                    <a href="/students/{{$student->id}}/editnilai" class="btn btn-primary">EDIT NILAI</a> 
                    <a href="/students" class="btn btn-warning">KEMBALI KE CRUD</a>
                    <br><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection