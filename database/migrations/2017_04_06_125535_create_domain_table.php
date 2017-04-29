<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain', function (Blueprint $table) {
          $table->increments('id_domain');
          $table->string('kode_domain', 255)->nullable();
          $table->string('nama_domain', 255)->nullable();
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
        Schema::drop('domain');
    }
}
