<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAuditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('data_audit', function (Blueprint $table) {
          $table->increments('id_data_audit');
          $table->string('id_auditee');
          // $table->foreign('id_auditee')->references('id_auditee')->on('dokumen_auditee')->onDelete('cascade');
          $table->string('id_proses_audit');
          // $table->foreign('id_proses_audit')->references('id_proses_audit')->on('proses_audit')->onDelete('cascade');
          $table->string('id_user');
          // $table->foreign('id_user')->references('id_user')->on('data_user')->onDelete('cascade');
          $table->string('nama_evidence', 255)->nullable();
          $table->string('deskripsi', 255)->nullable();
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
        Schema::drop('data_audit');
    }
}
