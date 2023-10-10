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
        Schema::create('parishioner_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parishioner_id')->constrained();
            $table->foreignId('prefecture_id')->constrained();
            $table->foreignId('municipality_id')->constrained();
            $table->string('zip_code', 7)->nullable(false);
            $table->string('address1' )->nullable(false)->default('');
            $table->string('home_phone_number', 21)->nullable(false)->default('');
            $table->string('mobile_phone_number', 21)->nullable(false)->default('');
            $table->string('fax_phone_number', 21)->nullable(false)->default('');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parishioner_addresses');
    }
};
