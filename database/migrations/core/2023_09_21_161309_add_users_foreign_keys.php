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
        Schema::connection('core')->table('users', function (Blueprint $table) {
            $table->foreign(['role_id'], 'fk_users_role_id')->references('id')->on('roles')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('core')->table('users', function (Blueprint $table) {
            $table->dropForeign('fk_users_platform_id');
            $table->dropForeign('fk_users_role_id');
        });
    }
};
