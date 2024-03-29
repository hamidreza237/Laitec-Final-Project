<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title',10)->nullable();
            $table->string('Description')->nullable();
            $table->string('Author')->nullable();
            $table->string('Keywords')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
