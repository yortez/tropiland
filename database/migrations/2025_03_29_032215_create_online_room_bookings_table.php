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
        Schema::create('online_room_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->date('booking_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('status')->default('pending'); // pending, confirmed, cancelled
            $table->string('payment_status')->default('unpaid'); // unpaid, paid
            $table->string('payment_method')->nullable(); // e.g., credit card, PayPal
            $table->string('transaction_id')->nullable(); // for tracking payments
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_room_bookings');
    }
};
