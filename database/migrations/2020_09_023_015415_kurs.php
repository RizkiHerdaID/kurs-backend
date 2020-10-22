<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Erate extends Migration
{

    public function up()
    {
        Schema::create('kurs_erate', function (Blueprint $table) {
            $table->id('id_kurs');
            $table->string('bank', 50);
            $table->double('kurs_jual', 18, 2, true);
            $table->double('kurs_beli', 18, 2, true);
            $table->timestamp('date_created')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kurs');
    }
}
