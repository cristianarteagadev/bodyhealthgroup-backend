<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_references', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('website', 100);
            $table->bigInteger('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_references');
    }
};
