<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->integer('No_Tes');
            $table->string('Nama_Lengkap');
            $table->string('JK');
            $table->date('TTL');
            $table->string('Agama');
            $table->string('Cita_Cita');
            $table->string('Hobi');
            $table->integer('Anak_ke');
            $table->integer('Jumlah_Saudara');
            $table->integer('Tinggi_Badan');
            $table->integer('Berat_Badan');
            $table->string('Golongan_Darah');
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
        Schema::dropIfExists('ppdbs');
    }
}
