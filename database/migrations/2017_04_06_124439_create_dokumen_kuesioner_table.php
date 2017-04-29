<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumenKuesionerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_kuesioner', function (Blueprint $table) {
          $table->increments('id_kuesioner');
          $table->string('id_subdomain_proses');
          // $table->foreign('id_subdomain')->references('id_subdomain')->on('subdomain_atribut')->onDelete('cascade');
          $table->string('deskripsi', 255)->nullable();
          $table->string('nilai_perdomain', 255)->nullable();
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
        Schema::drop('dokumen_kuesioner');
    }
}
