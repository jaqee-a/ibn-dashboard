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
        Schema::connection('core')->table('student', function (Blueprint $table) {
            $table->foreign(['user_id'], 'fk_student_user_id')->references('id')->on('users')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign(['image_id'], 'fk_student_image_id')->references('id')->on('image')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('core')->table('student', function (Blueprint $table) {
            $table->dropForeign('fk_student_user_id');
        });
    }
};
