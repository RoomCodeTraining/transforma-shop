<?php

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('mode', ['shipping', 'card', 'Mobile']);
            $table->enum('status', ['pending', 'approved', 'declined', 'refunded'])->default('pending');
            $table->foreignIdFor(Order::class)->constrained()->onDeleteCascade();
            $table->foreignIdFor(User::class)->constrained()->onDeleteCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
