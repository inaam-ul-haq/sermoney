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
            $table->string('pobox');
            $table->string('email');
            $table->string('name');
            $table->string('last_name');
            $table->string('mob_no');
            $table->string('ofice_no');
            $table->string('id_pass');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('company');
            $table->string('del_address');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
