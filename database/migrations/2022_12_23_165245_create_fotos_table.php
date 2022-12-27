<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(){
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trabajo_id');
            $table->string('path');
            $table->unsignedTinyInteger('orden');
            $table->timestamps();
            // FKs
            $table->foreign('trabajo_id')->references('id')->on('trabajos');
        });
    }

    public function down(){
        Schema::dropIfExists('fotos');
    }

};
