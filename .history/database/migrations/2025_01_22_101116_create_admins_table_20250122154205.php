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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 200)->default('null');
            $table->string('lastname', 200)->default('null');
            $table->string('email', 200)->unique();
            $table->string('phone', 200)->default('null');
            $table->enum('gender', ['M', 'F', 'O']);
            $table->string('password', 200)->default('null');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
