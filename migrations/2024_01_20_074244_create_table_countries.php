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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string("country_code",5)->nullable();
            $table->string("country_enName",55)->nullable();
            $table->string("country_arName",55)->nullable();
            $table->string("country_enNationality",55)->nullable();
            $table->string("country_arNationality",55)->nullable();
            $table->smallInteger("active")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
