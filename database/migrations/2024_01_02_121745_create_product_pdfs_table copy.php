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
        Schema::create('product_pdfs', function (Blueprint $table) {
            $table->id();
            $table->string('pdf_name');
            $table->string('pdf');
            $table->foreignId('product_id');
            $table->enum('status', [0, 1])->default(1);
            $table->timestamps();
            //$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_pdfs');
    }
};
