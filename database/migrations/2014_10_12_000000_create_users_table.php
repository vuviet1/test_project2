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
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('name', 30);
            $table->string('email')->unique();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->bigInteger('cccd')->nullable();
            $table->string('password')->nullable();
            $table->integer('role')->default(1);
            $table->timestamps();

            // Định nghĩa trường 'id' làm trường khóa chính
            $table->primary('id');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
