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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->text('header_title');
            $table->text('header_description');
            $table->text('header_button_label');
            $table->text('header_button_link');
            $table->text('header_img');
            $table->text('section1_title');
            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('meta_tag');
            $table->text('meta_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
