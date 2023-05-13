<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('content', 255);
            $table->bigInteger('category_id')->unsigned()->index();
            $table->bigInteger('region_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
