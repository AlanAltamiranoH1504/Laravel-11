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
        //Creamos tabla post
        Schema::create('posts', function (Blueprint $table) {
            //Definnimos columnas de la tabla
            $table->id();
            $table->String('title', 500);
            $table->String('slug', 500);
            $table->text('description')->nullable(false);
            $table->text('content')->nullable(false);
            $table->String('image')->nullable(false);
            $table->enum('posted', ['yes', 'no'])->default('no');
            $table->timestamps();

            //Agregamos FK de la tabla
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
