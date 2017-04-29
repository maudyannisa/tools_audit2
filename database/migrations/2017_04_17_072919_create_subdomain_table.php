<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubdomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdomain', function (Blueprint $table) {
          $table->increments('id_subdomain');
          $table->string('id_domain', 255)->nullable();
          $table->string('kode_subdomain', 255)->nullable();
          $table->string('nama_subdomain', 255)->nullable();
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
        Schema::drop('subdomain');
    }
}
