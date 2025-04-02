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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_zip')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('billing_method')->nullable();
            $table->decimal('billing_amount', 10, 2);
            $table->string('billing_currency')->default('USD');
            $table->string('billing_status')->default('pending');
            $table->string('billing_invoice_number')->unique();
            $table->date('billing_date')->nullable();
            $table->date('billing_due_date')->nullable();
            $table->text('billing_description')->nullable();
            $table->string('billing_reference')->nullable();
            $table->string('billing_notes')->nullable();
            $table->string('billing_terms')->nullable();
            $table->string('billing_tax')->nullable();
            $table->string('billing_discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
