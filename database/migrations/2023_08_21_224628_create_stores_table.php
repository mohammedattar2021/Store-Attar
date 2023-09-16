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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            //الاسم
            $table->string('name');
            //اسم للمنتج لمحركات البحث
            $table->string('slug')->unique();
            //العملة
            $table->char('currency',3)->default('USD');
            //اللغة
            $table->char('local',2)->default('en');
            //شعار المنتج اوالمتجر
            $table->string('logo');
            //الوصف
            $table->text('description')->nullable();
            //حالة المتجر
            $table->enum('status',['active','inactive'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
