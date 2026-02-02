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
        Schema::table('routine_elements', function (Blueprint $table) {
            $table->foreignId('practice_routine_id')
            ->constrained()
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('routine_elements', function (Blueprint $table) {
            $table->dropForeign(['practice_routine_id']);
            $table->dropColumn('practice_routine_id');
        });
    }
};
