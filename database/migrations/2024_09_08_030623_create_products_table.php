<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('paragraph');
            $table->string('category');
            $table->string('brand');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->decimal('rating', 2, 1);
            $table->integer('order');
            $table->integer('sales');
            $table->json('photos'); // Use JSON to store photo URLs
            $table->timestamps();
        });
        // Reset AUTO_INCREMENT
        DB::statement('TRUNCATE TABLE products RESTART IDENTITY');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
