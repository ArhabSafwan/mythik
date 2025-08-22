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
            $table->string('user_name', 100)->unique();
            $table->string('slug', 255);
            $table->unsignedBigInteger('role_id')->nullable();
            $table->string('phone', 30)->unique()->nullable();
            $table->integer('user_type')->default(2);
            $table->string('photo')->nullable();
            $table->integer('status')->default(0)->comment('0 for inactive user, 1 for active user');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'user_name', 'slug', 'role_id', 'phone', 'user_type',
                'photo', 'status', 'created_by', 'updated_by'
            ]);
        });
    }
};
