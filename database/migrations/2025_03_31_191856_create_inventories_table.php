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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('item_name')->nullable();
            $table->string('item_code')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('unit')->nullable();
            $table->decimal('price', 10, 2)->default(0.00);
            $table->string('supplier')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->default('available'); // available, out_of_stock, expired
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
