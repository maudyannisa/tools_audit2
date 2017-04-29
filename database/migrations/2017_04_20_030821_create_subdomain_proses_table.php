<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubdomainProsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdomain_proses', function (Blueprint $table) {
          $table->increments('id_subdomain_proses');
          $table->string('id_domain', 255);
          $table->string('id_subdomain', 255);
          $table->string('kode_subdomain_proses', 255);
          $table->string('nama_subdomain_proses', 255);
          $table->string('level_temuan', 255)->nullable();
          $table->string('level_target', 255)->nullable();
          $table->string('rekomendasi', 255)->nullable();
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
        Schema::drop('subdomain_proses');
    }
}
