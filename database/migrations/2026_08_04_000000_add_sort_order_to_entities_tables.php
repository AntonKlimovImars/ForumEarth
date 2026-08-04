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
        Schema::table('speakers', function (Blueprint $table) {
            $table->integer('sort_order')->default(0)->after('id');
        });

        Schema::table('info_partners', function (Blueprint $table) {
            $table->integer('sort_order')->default(0)->after('id');
        });

        Schema::table('sponsors', function (Blueprint $table) {
            $table->integer('sort_order')->default(0)->after('id');
        });

        Schema::table('universities', function (Blueprint $table) {
            $table->integer('sort_order')->default(0)->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->dropColumn('sort_order');
        });

        Schema::table('info_partners', function (Blueprint $table) {
            $table->dropColumn('sort_order');
        });

        Schema::table('sponsors', function (Blueprint $table) {
            $table->dropColumn('sort_order');
        });

        Schema::table('universities', function (Blueprint $table) {
            $table->dropColumn('sort_order');
        });
    }
};
