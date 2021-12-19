<html> 
    <head> 
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head> 
    <body> 
        <style type="text/css"> table tr td, table tr th{ font-size: 12pt; } </style> 
        <div class="card-header" align="center"><b>{{ __('JURUSAN TEKNOLOGI INFORMASI POLITEKNIK NEGERI MALANG') }}</b></div>

        <div class="card-body">
            <center>
                <b>{{ __('KARTU HASIL STUDI (KHS)') }}</b>
            </center>

            <div class="card-body">
                Nama : {{ $student->name }} <br>
                NIS : {{ $student->nim }} <br> 
                Kelas : {{ $student->kelas->class_name }} <br>
                Jurusan : {{ $student->department }} <br><br>
            </div>
            
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Mata kuliah</th>
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
            </div>
        </div>
    </body> 
</html>