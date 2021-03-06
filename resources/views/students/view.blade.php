@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">

                <div class="card-body">
                <div class="card-header">{{ __('STUDENT DATA') }}</div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <img width="250px" src="{{asset('storage/'.$student->photo)}}">
                    <form action="/students/{{$student->id}}" method="post">
                        {{csrf_field()}}
                        @method('PUT')

                        <table class="table table-responsive">
                        <tr><th>NIS</th><th>:</th><td>{{$student->nim}}</td></tr>
                        <tr><th>Nama</th><th>:</th><td>{{$student->name}}</td></tr>
                        <tr><th>Kelas</th><th>:</th><td>{{$student->kelas->class_name}}</td></tr>
                        <tr><th>Jurusan</th><th>:</th><td>{{$student->department}}</td></tr>
                        <tr><th>Nomor HP</th><th>:</th><td>{{$student->phone_number}}</td></tr>
                        </table>

                        <a href="/students" class="btn btn-warning">KEMBALI KE CRUD</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection