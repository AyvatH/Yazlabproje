<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yonetici extends Model
{
    use HasFactory;
    protected $table="yonetici";
    protected $fillable=["ad","soyad","eposta","unvan","sifre"];
    public $timestamps = false;
}
