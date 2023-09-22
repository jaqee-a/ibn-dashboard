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
        Schema::connection('core')->create('enrollement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->index('student_id');
            $table->foreignId('speciality_id')->index('speciality_id');
            $table->integer('year');
            $table->foreignId('group_id')->index('group_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('core')->dropIfExists('enrollement');
    }
};
