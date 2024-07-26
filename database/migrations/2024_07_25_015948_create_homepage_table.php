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
        Schema::create('homepage', function (Blueprint $table) {
            $table->id();
            $table->string('header_title');
            $table->string('header_description');
            $table->string('header_img');
            $table->string('header_button_label1');
            $table->string('header_button_link1');
            $table->string('header_button_label2');
            $table->string('header_button_link2');
            $table->string('section1_img');
            $table->string('section1_card1_title');
            $table->string('section1_card1_description');
            $table->string('section1_card2_title');
            $table->string('section1_card2_description');
            $table->string('section1_card3_title');
            $table->string('section1_card3_description');
            $table->string('section2_title');
            $table->string('section2_description');
            $table->string('section2_img1');
            $table->string('section2_img2');
            $table->string('section2_successrate');
            $table->string('section2_casesdone');
            $table->string('section2_years_in_business');
            $table->string('section2_button_label');
            $table->string('section2_button_link');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage');
    }
};
