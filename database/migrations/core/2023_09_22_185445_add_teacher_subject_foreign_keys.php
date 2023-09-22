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
        Schema::connection('core')->table('teacher_subject', function (Blueprint $table) {
            $table->foreign(['subject_id'], 'fk_teacher_subject_subject_id')->references('id')->on('subject')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign(['teacher_id'], 'fk_teacher_subject_teacher_id')->references('id')->on('teacher')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('core')->table('teacher_subject', function (Blueprint $table) {
            $table->dropForeign('fk_teacher_subject_subject_id');
            $table->dropForeign('fk_teacher_subject_teacher_id');
        });
    }
};
