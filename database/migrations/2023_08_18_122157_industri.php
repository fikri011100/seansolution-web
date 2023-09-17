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
        //
        Schema::create('industri', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('detail');
            $table->string('synopsis');
            $table->string('image_detail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('industri');
    }
};
