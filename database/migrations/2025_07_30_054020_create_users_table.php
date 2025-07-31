<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();            
            $table->string('mobile_no',10)->unique();
            $table->enum('gender',['male','female','other']);
            $table->string('password');
            $table->enum('role', ['admin', 'manager', 'accountant', 'viewer']);
            $table->rememberToken();
            $table->timestamp('registered_at')->nullable();
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
