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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('expense_name');
            $table->string('expense_description')->nullable();
            $table->decimal('expense_amount', 10, 2);
            $table->string('expense_currency')->default('USD');
            $table->string('expense_category')->nullable();
            $table->string('expense_status')->default('pending');
            $table->string('expense_invoice_number')->unique();
            $table->date('expense_date')->nullable();
            $table->date('expense_due_date')->nullable();
            $table->string('expense_reference')->nullable();
            $table->string('expense_notes')->nullable();
            $table->string('expense_terms')->nullable();
            $table->string('expense_tax')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
