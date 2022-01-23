<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poling', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mhs', 100);
            $table->integer('pemberi_poling');
            $table->integer('photogenic');
            $table->integer('tanggung_jawab');
            $table->integer('jujur');
            $table->integer('aktif');
            $table->integer('kreatif');
            $table->integer('nilai');
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
        Schema::dropIfExists('poling');
    }
}
