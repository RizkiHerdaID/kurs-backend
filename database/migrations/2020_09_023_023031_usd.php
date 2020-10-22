<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usd extends Migration{

    public function up(){
        Schema::create('usd_jual', function (Blueprint $table) {
            $table->id('id_usd');
            $table->string('mata_uang', 3);
            $table->double('jual_week', 18, 2, true);
            $table->double('jual_month', 18, 2, true);
            $table->double('jual_threemonth', 18, 2, true);
            $table->double('jual_sixmonth', 18, 2, true);
            $table->timestamp('date_label')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('date_created')->useCurrent();
        });
    }

    public function down(){
        Schema::dropIfExists('usd_jual');
    }
}