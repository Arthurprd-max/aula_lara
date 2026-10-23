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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('empresa')
                ->nullable()
                ->after('id')
                ->constrained('empresa')
                ->cascadeOnDelete();

            $table->string('papel', 20)->default('admin')
                ->after('password');

            $table->boolean('ativo')
                ->default(true)
                ->after('papel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropconstrainedForeignId('empresa');
            $table->dropColumn('papel', 'ativo');
        });
    }
};
