<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
public function up()
{
    Schema::create('empresas', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nome');
        $table->int('idade');
        $table->string('cnpj');
        $table->string('fazenda');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
