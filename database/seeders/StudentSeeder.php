<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert
        ([
            'nim' => '2031710121',
            'name' => 'Raden Dimas Erlangga',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '081256645857',
        ]);
        DB::table('students')->insert
        ([
            'nim' => '2031710142',
            'name' => 'Mohammad Hifdzi Maulana',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '0895396629202',
        ]);
        DB::table('students')->insert
        ([
            'nim' => '2031710134',
            'name' => 'Tegar Dwi Vantoro',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '085645510533',
        ]);
    }
}