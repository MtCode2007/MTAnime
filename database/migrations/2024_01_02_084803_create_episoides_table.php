<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\models\Anime;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('episoides', function (Blueprint $table) {
            $table->increments('id');
            // $table->foreign('anime_id')->references('id')->on('animes');
            $table->integer('anime_id');
            // $table->foreignId('anime_id')->default('0')->constrained('animes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('num')->default('0');
            $table->string('link')->default('0');
            $table->string('status')->default('0');
            $table->string('date')->nullable()->default('-----');
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episoides');
    }
};
