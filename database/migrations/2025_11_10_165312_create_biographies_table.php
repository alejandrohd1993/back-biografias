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
         Schema::create('biographies', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->foreignId('occupation_id')->constrained()->cascadeOnDelete();
            $table->date('birth_date')->nullable();
            $table->longText('biography')->nullable();
            $table->string('image')->nullable();
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biographies');
    }
};
