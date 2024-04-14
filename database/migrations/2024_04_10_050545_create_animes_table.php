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
        Schema::create('animes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('details');
            $table->string('status');
            $table->integer('studio_id')->unsigned();
            $table->foreign('studio_id')->references('id')->on('studios');
            $table->string('image');
            $table->string('trailer');
            $table->string('episoide_count');
            $table->string('tags');
            $table->integer('rating')->default(1);
            $table->enum('type',[1,2,3,4,]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
