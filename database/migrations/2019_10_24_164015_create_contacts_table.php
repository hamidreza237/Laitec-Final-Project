<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{

    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FullName')->nullable();
            $table->string('Email')->nullable();
            $table->text('Comment')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
