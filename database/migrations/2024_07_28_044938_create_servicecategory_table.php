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
        Schema::create('servicecategory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->text('breadcrumbs');
            $table->text('header_title');
            $table->mediumText('header_description');
            $table->text('header_img');
            $table->string('slug');
            $table->text('header_button_label');
            $table->text('header_button_link');
            $table->text('section1_img')->nullable();
            $table->mediumText('section1_description')->nullable();
            $table->text('section1_inclusion_title')->nullable();
            $table->text('section1_button_label')->nullable();
            $table->text('section1_button_link')->nullable();
            $table->mediumText('section1_inclusion_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicecategory');
    }
};
