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
        Schema::connection('core')->create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->foreignId('city_id');
            $table->foreignId('town_id');
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->boolean('active')->default(false);
            $table->date('last_online')->nullable();
            $table->date('last_request')->nullable();
            $table->foreignId('role_id')->index('role_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('core')->dropIfExists('users');
    }
};
