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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('store_id')->constrained('stores','id')->cascadeOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories','id')->nullOnDelete();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedFloat('price')->default(0);
            //اذا المنتج عليه خصم
            $table->unsignedFloat('sale_price')->default(0);
            $table->unsignedInteger('quantity')->default(0);
            //in-stock متاح للبيع /sold-out انتهت الكمية المتوفرة/draft غير منشور
            $table->enum('status',['in-stock','sold-out','draft']);
            //عدد المشاهدات
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('sales')->default(0);
            $table->unsignedFloat('rating')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
