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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->text('header_title');
            $table->text('header_description')->nullable();
            $table->text('header_button_label')->nullable();
            $table->text('header_button_link')->nullable();
            $table->text('header_img')->nullable();
            $table->text('section1_description')->nullable();
            $table->text('section1_business_referrals')->nullable();
            $table->text('section1_verbal_commitment')->nullable();
            $table->text('section1_img1')->nullable();
            $table->text('section1_img2')->nullable();
            $table->text('section2_title')->nullable();
            $table->text('section2_description')->nullable();
            $table->text('section2_successful_txn')->nullable();
            $table->text('section2_clients_served')->nullable();
            $table->text('section2_years_in_business')->nullable();
            $table->text('section2_industry_awards')->nullable();
            $table->text('section2_img')->nullable();
            $table->text('section2_card1_title')->nullable();
            $table->text('section2_card1_description')->nullable();
            $table->text('section2_card1_icon')->nullable();
            $table->text('section2_card2_title')->nullable();
            $table->text('section2_card2_description')->nullable();
            $table->text('section2_card2_icon')->nullable();
            $table->text('section2_card3_title')->nullable();
            $table->text('section2_card3_description')->nullable();
            $table->text('section2_card3_icon')->nullable();
            $table->text('section2_card4_title')->nullable();
            $table->text('section2_card4_description')->nullable();
            $table->text('section2_card4_icon')->nullable();
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
        Schema::dropIfExists('about');
    }
};
