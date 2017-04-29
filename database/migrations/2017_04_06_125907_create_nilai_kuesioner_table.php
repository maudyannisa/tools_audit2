<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiKuesionerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_kuesioner', function (Blueprint $table) {
          $table->increments('id_nilai');
          // $table->string('id_kuesioner');
          // $table->foreign('id_kuesioner')->references('id_kuesioner')->on('subdomain_atribut')->onDelete('cascade');
          $table->string('nilai_kuesioner', 255)->nullable();
          $table->string('keterangan', 255)->nullable();
          $table->timestamps();
          $table->softDeletes();
          $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nilai_kuesioner');
    }
}
