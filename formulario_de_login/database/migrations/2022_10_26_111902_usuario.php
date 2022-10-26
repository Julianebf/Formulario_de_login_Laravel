<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table){
            $table->id();
            $table->string('usuario', 50);
            $table->string('senha', 200);
            $table->dateTime('last_login')->nullable();
            $table->tinyInteger('actve')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('usuarios');
    }
};
