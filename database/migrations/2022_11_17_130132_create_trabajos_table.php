<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(){
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->boolean('estado')->default(1);
            $table->timestamps();
            // FKs
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    public function down(){
        Schema::dropIfExists('trabajos');
    }

};