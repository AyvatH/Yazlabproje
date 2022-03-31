<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donem extends Model
{
    use HasFactory;
    protected $table="donem";
    protected $fillable=["donem_adi","aktif_donem","tarih"];
    public $timestamps = false;
}
