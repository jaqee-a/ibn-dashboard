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
        Schema::connection('core')->table('communication', function (Blueprint $table) {
            $table->foreign(['from_id'], 'fk_communication_from_id')->references('id')->on('users')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign(['to_id'], 'fk_communication_to_id')->references('id')->on('users')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('core')->table('communication', function (Blueprint $table) {
            $table->dropForeign('fk_communication_from_id');
            $table->dropForeign('fk_communication_to_id');
        });
    }
};
