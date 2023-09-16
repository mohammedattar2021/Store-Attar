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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            //الاسم
            $table->string('name');
            //اسم للمنتج لمحركات البحث
            $table->string('slug')->unique();
            // //هنا مثلا  منتج رايسي ومنتجات تابعة له
            // $table->unsignedInteger('parent_id')->nullable();
            // الصورة
            $table->string('image')->nullable();
             //الوصف
            $table->text('description')->nullable();
            //حالة التصنيف
            $table->enum('status',['active','inactive'])->default('active');
            $table->foreignId('parent_id')->nullable()->constrained('categories','id')->nullOnDelete();

            $table->timestamps();
            // $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
            // $table->foreignId('parent_id')->nullable()->constrained('categories','id')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
