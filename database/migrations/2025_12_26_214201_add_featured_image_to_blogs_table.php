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
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('featured_image')->after('title')->nullable();
            $table->string('status')->after('featured_image')->default('draft');
            $table->string('meta_title')->after('content')->nullable();
            $table->text('meta_description')->after('meta_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['featured_image', 'meta_title', 'meta_description', 'status']);
        });
    }
};
