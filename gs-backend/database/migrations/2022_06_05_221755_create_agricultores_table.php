<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('agricultores', function (Blueprint $table) {
            $table->id();
 	        $table->string('nome');
            $table->int('idade');
            $table->string('cnpj');
            $table->string('fazenda');
        });
    }


    public function down()
    {
        Schema::dropIfExists('agricultores');
    }
};
