<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');

            $table->foreign('role_id')->references('id')->on('user_roles');
        });
        Schema::table('properties' , function (Blueprint $table){
          $table->unsignedBigInteger('user_id');
          $table->unsignedBigInteger('currency_id');
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('currency_id')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
