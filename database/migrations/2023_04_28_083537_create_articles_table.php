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
        // ! title | subtitle | body | img | user_id | category_id
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('body');
            $table->string('img');
            
            // cosa succede se cancello la categoria associata ad un articolo?
            // ? Possibili soluzioni:
            
            // ? 2. Decido di cancellare a cascata tutti gli articoli che hanno quella categoria
            $table->unsignedBigInteger('category_id'); // ! crea la colonna
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // ! creo il vincolo

            // ? 1. Setto a null il campo riferito alla tabella della FK
            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
