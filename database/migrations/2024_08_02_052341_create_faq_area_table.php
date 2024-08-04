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
        Schema::create('faq_area', function (Blueprint $table) {
            $table->id();
            $table->text('header_title');
            $table->text('header_description')->nullable();
            $table->text('header_img')->nullable();
            $table->text('header_button_label')->nullable();
            $table->text('header_button_link')->nullable();
            $table->text('section1_img')->nullable();
            $table->text('section1_button_label')->nullable();
            $table->text('section1_button_link')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_tag')->nullable();
            $table->text('meta_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_area');
    }
};
