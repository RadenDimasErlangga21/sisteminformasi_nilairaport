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

                    <div class="card-body">
                        Name : {{ $student->name }} <br> 
                        NIM : {{ $student->nim }} <br> 
                        Class : {{ $student->kelas->class_name }} <br>
                        Department : {{ $student->department }} <br>
                    </div>

                    <form action="/students/{{$student->id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$student->id}}"></br>
                        <input type="hidden" name="id" value="{{$student->course_id}}"></br>

                        @foreach($student->courses as $cs)
                        <div class="form-group">
                        <tr>
                        <label for="nilai">Nilai</label>
                            <td>{{ $cs->course_name }}</td>
                            <input type="text" class="form-control" required="required" name="nilai" value="{{ $cs->pivot->nilai }}"></br>
                        </div>
                        @endforeach

                        <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection