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
        Schema::connection('core')->table('enrollement', function (Blueprint $table) {
            $table->foreign(['student_id'], 'fk_enrollement_student_id')->references('id')->on('student')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign(['speciality_id'], 'fk_enrollement_speciality_id')->references('id')->on('speciality')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign(['group_id'], 'fk_enrollement_group_id')->references('id')->on('group')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('core')->table('enrollement', function (Blueprint $table) {
            $table->dropForeign('fk_enrollement_student_id');
            $table->dropForeign('fk_enrollement_speciality_id');
            $table->dropForeign('fk_enrollement_group_id');
        });
    }
};
