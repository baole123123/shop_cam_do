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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('customer_name')->nullable();
            $table->string('identi')->nullable();
            $table->string('birthday')->nullable();
            $table->string('customer_image')->nullable();
            $table->string('contract_type_id')->default(0);
            $table->unsignedBigInteger('asset_id');
            $table->foreign('asset_id')->references('id')->on('assets');
            $table->string('total_loan')->nullable();
            $table->string('interest_payment_period')->nullable();
            $table->string('interest_rate')->nullable();
            $table->date('date_paid')->nullable();
            $table->string('note')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
