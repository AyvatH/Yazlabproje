<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danisman extends Model
{
    use HasFactory;
    protected $table="danisman";
    protected $fillable=["ad","soyad","sicilno","eposta","donem","sifre","unvan","donem"];
    public $timestamps = false;
}
