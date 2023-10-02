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
        Schema::create('summon_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('issued_from')->nullable();
            $table->unsignedBigInteger('issued_to')->nullable();
            $table->integer('amoount');
            $table->boolean('cleared');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summon_tickets');
    }
};
