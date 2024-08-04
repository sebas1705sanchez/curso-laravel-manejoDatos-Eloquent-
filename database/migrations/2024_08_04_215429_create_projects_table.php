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
        Schema::create('projects', function (Blueprint $table) {
            $table->integer('project_id', true);
            $table->integer('city_id')->nullable()->index('city_id');
            $table->integer('company_id')->nullable()->index('company_id');
            $table->integer('user_id')->nullable()->index('user_id');
            $table->string('name', 30)->nullable();
            $table->date('execution_date')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
