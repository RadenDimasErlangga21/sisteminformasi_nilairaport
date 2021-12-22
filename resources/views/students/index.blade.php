@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @can('manage-student')
                    <a href="/students/create" class="btn btn-primary">Add Data</a> 
                    <br><br>
                    @endcan

                    <form class="form" method="get" action="{{ route('search') }}">
                    <div class="form-group w-100 mb-3">
                    <label for="search" class="d-block mr-2">Pencarian</label>
                    <input type="text" name="search" class="form-control w-90 d-inline" id="search" placeholder="Search Data">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </div></form>

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Opsi</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student as $s)
                            <tr>
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->kelas->class_name }}</td>
                                <td>{{ $s->department }}</td>
                                <td>
                                    <form action="/students/{{$s->id}}" method="post">

                                    @can('manage-student')
                                        <a href="/students/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                    @endcan

                                        <a href="/students/{{$s->id}}" class="btn btn-warning">View</a>
                                        <a href="/students/{{$s->id}}/nilai" class="btn btn-warning">Nilai</a>
                                       
                                        @can('manage-student')
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                        @endcan

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection