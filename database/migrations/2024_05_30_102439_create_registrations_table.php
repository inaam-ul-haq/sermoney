<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_registrations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('pobox');
            $table->string('username');
            $table->string('mob_no');
            $table->string('office_no');
            $table->string('id_pass');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('company');
            $table->string('del_address');
            $table->enum('refrence', ['Add', 'Staf', 'RepostingAgents'])->nullable(); // Add your allowed values here
            $table->enum('news_platform', ['Google', 'FaceBook', 'Insta'])->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
