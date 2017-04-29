<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('perusahaan', function (Blueprint $table) {
          $table->increments('id_perusahaan');
          $table->string('nama_perusahaan', 255)->unique();
          $table->text('deskripsi', 255)->nullable();
          $table->string('tujuan', 255)->nullable();
          $table->string('visi', 255)->nullable();
          $table->string('misi', 255)->nullable();
          $table->string('jabatan', 255)->nullable();
          $table->string('keterangan', 255)->nullable();
          $table->string('nama_pegawai', 255)->nullable();
          $table->string('no_hp', 255)->nullable();
          $table->string('email', 255)->nullable();
          $table->text('logo', 255)->nullable();
          // $table->timestamps('updated_at', 255)->nullable();
          // $table->timestamps('created_at', 255)->nullable();
          // $table->timestamps('deleted_at', 255)->nullable();
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
        Schema::drop('perusahaan');
    }
}
