<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ogrenci extends Model
{
    use HasFactory;
    protected $table="ogrenciler";
    protected $fillable=["ad","soyad","no","sinif","bolum","fak","eposta","foto","tel","danisman","sifre"];
    public $timestamps = false;
}
