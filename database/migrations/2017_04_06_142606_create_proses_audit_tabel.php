<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsesAuditTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proses_audit', function (Blueprint $table) {
          $table->increments('id_proses_audit');
          $table->string('id_perusahaan');
          $table->string('id_auditee');         
          // $table->foreign('id_subdomain')->references('id_subdomain')->on('subdomain_atribut')->onDelete('cascade');
          // $table->string('level_temuan', 10)->nullable();
          // $table->string('level_target', 10)->nullable();
          // $table->string('rekomendasi', 255)->nullable();
          $table->string('keterangan', 255)->nullable();
          $table->timestamps();
          $table->softDeletes();
          $table->integer('status')->default(1);
        });  

        // Schema::create('subdomain_proses_audit', function (Blueprint $table) {
        //   $table->increments('id_proses_audit');
        //   $table->string('id_perusahaan');
        //   $table->string('id_auditee');
        //   $table->string('id_domain');
        //   $table->string('id_subdomain');
          
          
        //   // $table->foreign('id_subdomain')->references('id_subdomain')->on('subdomain_atribut')->onDelete('cascade');
        //   // $table->string('level_temuan', 10)->nullable();
        //   // $table->string('level_target', 10)->nullable();
        //   // $table->string('rekomendasi', 255)->nullable();

        //   $table->string('keterangan', 255)->nullable();
        //   $table->timestamps();
        //   $table->softDeletes();
        //   $table->integer('status')->default(1);
        // });

        // Schema::create('kuisioner', function (Blueprint $table) {
        //   $table->increments('id_proses_audit');
        //   $table->string('id_perusahaan');
        //   $table->string('id_auditee');
        //   $table->string('id_domain');
        //   $table->string('id_subdomain');
          
          
        //   // $table->foreign('id_subdomain')->references('id_subdomain')->on('subdomain_atribut')->onDelete('cascade');
        //   // $table->string('level_temuan', 10)->nullable();
        //   // $table->string('level_target', 10)->nullable();
        //   // $table->string('rekomendasi', 255)->nullable();

        //   $table->string('keterangan', 255)->nullable();
        //   $table->timestamps();
        //   $table->softDeletes();
        //   $table->integer('status')->default(1);
        // });     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proses_audit');
    }
}
