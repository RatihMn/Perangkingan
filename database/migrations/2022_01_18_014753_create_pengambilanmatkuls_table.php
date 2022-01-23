<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengambilanmatkulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengambilanmatkul', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mk_id', 50)->unique();
            $table->string('thn_ajaran', 20);
            $table->string('semester', 50);
            $table->string('nilai_huruf', 50);
            $table->string('nilai_angka',50);
            $table->string('sks', 50);
            $table->string('nilai', 50);
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
        Schema::dropIfExists('pengambilanmatkul');
    }
}
