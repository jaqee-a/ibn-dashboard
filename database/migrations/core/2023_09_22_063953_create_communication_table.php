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
        Schema::connection('core')->create('communication', function (Blueprint $table) {
            $table->id();
            $table->foreignId('from_id')->index('from_id');
            $table->foreignId('to_id')->index('to_id');
            $table->string('subject');
            $table->string('content', 5000);
            $table->boolean('read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('core')->dropIfExists('communication');
    }
};
