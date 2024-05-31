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
        Schema::create('shoppin_carts', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->default(1);
            $table->foreignId('product_id')->constrained()->onDeleteCascade();
            $table->foreignId('user')->constrained()->onDeleteCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoppin_carts');
    }
};