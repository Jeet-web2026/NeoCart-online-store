<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('product_image')->nullable();
            $table->text('product_name')->nullable();
            $table->integer('product_price')->nullable();
            $table->integer('product_discount')->nullable();
            $table->text('product_company_name')->nullable();
            $table->integer('product_available')->nullable();
            $table->text('product_description')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
