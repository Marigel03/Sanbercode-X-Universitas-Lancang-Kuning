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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id();
            $table->string('isi_ulasan');

            $table->unsignedBigInteger('user_id_user');
            $table->foreign('user_id_user')->references('id')->on('users')->onDelete('cascade');
           
            $table->unsignedBigInteger('film_id_film');
            $table->foreign('film_id_film')->references('id')->on('film')->onDelete('cascade');
            
            $table->unsignedBigInteger('film_genre_id');
            $table->foreign('film_genre_id')->references('id')->on('film')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
