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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable(); // untuk foto pengguna
            $table->string('home_photo')->nullable(); // untuk foto rumah
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('street_address');
            $table->string('city');
            $table->string('region'); // untuk State/Province
            $table->string('postal_code')->nullable();
            $table->string('link_house');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
