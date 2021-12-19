<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //use HasFactory;
    protected $fillable = ['nim','name','class', 'department', 'phone_number', 
    'Pemrograman_Berbasis_Objek', 'Pemrograman_Web_Lanjut','Basis_Data_Lanjut','Praktikum_Basis_Data_Lanjut'];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'class_id');
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class)->withPivot('nilai');
    }
}