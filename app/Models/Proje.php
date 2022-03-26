<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proje extends Model
{
    use HasFactory;
    protected $table="projeoneri";
    protected $fillable=["oneri_id","num_id","baslik","amac","materyal","durum","aciklama","anahtar_kelime","anahtar_kelime2","anahtar_kelime3","anahtar_kelime4","anahtar_kelime5"
];
    public $timestamps = false;

}
