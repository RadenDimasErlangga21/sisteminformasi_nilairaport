<html> 
    <head> 
        <title>Laporan Nilai Siswa</title> 
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
            </div>
        </div>
    </body> 
</html>