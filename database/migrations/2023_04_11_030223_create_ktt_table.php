<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeterangantempattinggalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktts', function (Blueprint $table) {
        
            $table->id();
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota_kabupaten');
            $table->string('provinsi');
            $table->number('kd_pos');
            $table->string('negara');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ktts');
    }
}
