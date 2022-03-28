<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projetez extends Model
{
    use HasFactory;
    protected $table="projetez";
    protected $fillable=["tez_id","rapor_id"	,"word_path"	,"pdf_path"	,"durum","aciklama"];
    public $timestamps = false;
}
