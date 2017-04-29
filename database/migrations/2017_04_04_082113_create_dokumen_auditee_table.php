<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumenAuditeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('dokumen_auditee', function (Blueprint $table) {
          $table->increments('id_auditee');
          $table->integer('id_perusahaan');
          // $table->foreign('id_perusahaan')->references('id_perusahan')->on('perusahaan')->onDelete('cascade');
          $table->string('nama_sistem', 255)->nullable();
          $table->string('unit_kerja', 255)->nullable();
          $table->string('kode_risiko', 15)->nullable();
          $table->string('risiko', 255)->nullable();
          $table->string('level_risiko', 255)->nullable();
          $table->string('risk_cause', 255)->nullable();
          $table->string('control', 255)->nullable();
          $table->string('jenis_control', 255)->nullable();
          $table->string('frekuensi_control', 255)->nullable();
          $table->string('attribut_control', 255)->nullable();
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
        Schema::drop('dokumen_auditee');
    }
}
