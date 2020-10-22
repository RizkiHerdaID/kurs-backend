<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usd extends Model{
    protected $table = "usd_jual";

    protected $primaryKey = "id_usd";

    protected $fillable = ['mata_uang', 'jual_week', 'jual_month', 'jual_threemonth', 'jual_sixmonth'];

    public $timestamps = false;
}