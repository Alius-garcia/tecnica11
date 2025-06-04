<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Reverse the migrations.
     */
    public function up(): void
    {
        Schema::create('novedades', function (Blueprint $table){
            $table->id();
            $table->date ('fecha');
            $table->string('titulo', length: 100);
            $table->text('descripcion');
        });
    }
    /**
     * Run migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('novedades');
    }
};
