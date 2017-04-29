<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsesAuditSubdomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_subdomain_proses', function (Blueprint $table) {
          $table->increments('id_proses_subdomain_audit');
          $table->string('id_domain');
          $table->string('id_subdomain'); 
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
        Schema::drop('audit_subdomain_proses');
    }
}
