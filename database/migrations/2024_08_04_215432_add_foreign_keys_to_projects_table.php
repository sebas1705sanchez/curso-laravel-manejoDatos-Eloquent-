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
        Schema::table('projects', function (Blueprint $table) {
            $table->foreign(['city_id'], 'projects_ibfk_1')->references(['city_id'])->on('cities')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['company_id'], 'projects_ibfk_2')->references(['company_id'])->on('companies')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'projects_ibfk_3')->references(['user_id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_ibfk_1');
            $table->dropForeign('projects_ibfk_2');
            $table->dropForeign('projects_ibfk_3');
        });
    }
};
