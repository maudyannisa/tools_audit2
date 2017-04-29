<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_user', function (Blueprint $table) {
          $table->increments('id_user');
          $table->string('nama_user', 255)->unique();
          $table->string('username', 255)->nullable();
          $table->string('password', 255)->nullable();
          $table->string('role_akses', 255)->nullable();
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
        Schema::drop('data_user');
    }
}
