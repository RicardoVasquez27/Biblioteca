<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('librocategorias', function (Blueprint $table) {
            $table->unsignedBigInteger('categorias_id');
            $table->primary(['libros_id', 'categorias_id']);
            $table->foreign('libros_id')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('librocategorias');
    }
};
