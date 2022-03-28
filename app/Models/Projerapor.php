<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projerapor extends Model
{
    use HasFactory;
    protected $table="projerapor";
    protected $fillable=["rapor_id","proje_id","word_path","pdf_path","durum","aciklama","word2_path","pdf2_path","word3_path","pdf3_path"];
    public $timestamps = false;
}
