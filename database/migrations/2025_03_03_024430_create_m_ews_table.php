<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMEwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ews', function (Blueprint $table) {
            $table->id();
            $table->integer('no_cm');
            $table->string('nama_pasien'); // Perbaiki typo 'passien' -> 'pasien'
            $table->string('ruangan'); // Perbaiki typo 'ruangn' -> 'ruangan'
            $table->string('diagnosa');
            $table->string('skrining_ews');
            $table->string('keadaan');
            $table->text('ket');
            $table->integer('skor');
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
        Schema::dropIfExists('m_ews');
    }
}
