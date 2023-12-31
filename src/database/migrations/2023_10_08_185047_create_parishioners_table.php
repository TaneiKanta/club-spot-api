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
        Schema::create('parishioners', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable(false)->default('');
            $table->string('last_name')->nullable(false)->default('');
            $table->string('first_name_kana')->nullable(false)->default('');
            $table->string('last_name_kana')->nullable(false)->default('');
            $table->string('email')->nullable(false)->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parishioners');
    }
};
