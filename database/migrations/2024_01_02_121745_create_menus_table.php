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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_title');
            $table->string('slug');
            $table->integer('parent_id');
            $table->integer('sort_order');
            $table->integer('page_id');
            $table->string('type');
            $table->string('page_type');
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
        Schema::dropIfExists('menus');
    }
};
