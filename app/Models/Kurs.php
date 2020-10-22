<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurs extends Model
{
    protected $table = "kurs";

    protected $primaryKey = "id_kurs";

    protected $fillable = ['bank', 'kurs_jual', 'kurs_beli'];

    public $timestamps = false;
}
