<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Erate extends Model{
    protected $table = "kurs_erate";

    protected $primaryKey = "id_kurs";

    protected $fillable = ['erate_jual', 'erate_beli', 'ttcounter_jual', 'ttcounter_beli'];

    public $timestamps = false;
}