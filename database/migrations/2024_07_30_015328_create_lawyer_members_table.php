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
        Schema::create('lawyer_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lawyers_id')->references('id')->on('lawyers')->onDelete('cascade');
            $table->text('lawyer_name');
            $table->text('lawyer_designation');
            $table->text('lawyer_img');
            $table->text('lawyer_about');
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
        Schema::dropIfExists('lawyer_members');
    }
};
