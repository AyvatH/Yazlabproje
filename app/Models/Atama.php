<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atama extends Model
{
    use HasFactory;
    protected $table="atama";
    protected $fillable=["ogr_id","dan_id"];
    public $timestamps = false;
}
