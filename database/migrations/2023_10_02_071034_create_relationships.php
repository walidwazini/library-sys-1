<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        // Schema::create('relationships', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('user_id')->references("id")->on('users')->nullOnDelete();
        });


        Schema::table('rental_tickets', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')->nullOnDelete();
            $table->foreign('acquired_by')->references('id')->on('users')->nullOnDelete();
        });

        Schema::table('summon_tickets', function (Blueprint $table) {
            $table->foreign('issued_from')->references('id')->on('rental_tickets');
            $table->foreign('issued_to')->references('id')->on('users');
        });

        // Schema::table('staffs', function (Blueprint $table) {
        //     $table->foreign('user_id')->references("id")->on('users')->nullOnDelete();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('relationships');
    }
};
