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
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('address');
            $table->date('dateOfBirth');
            $table->string('email');
            $table->enum('gender',['Male', 'Female', 'Others'])->default('Male');
            $table->string('religion')->default('Hindu');
            $table->string('status')->default('Not Married');
            $table->string('job')->default('Student');
            $table->string('terms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};