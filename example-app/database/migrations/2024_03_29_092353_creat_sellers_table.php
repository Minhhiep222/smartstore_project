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
        Schema::create('tbl_sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password')->hash();
            $table->string('phone')->unique();
            $table->string('img')->nullable();
            $table->enum('sex', ['male', 'female', 'other']);
            $table->date('DOB');
            $table->text('address')->nullable();
            $table->text('feedback')->nullable();
            $table->text('history_transaction')->nullable();
            $table->string('name_company');
            $table->enum('type_business', ['individual', 'enterprise']);
            $table->timestamp('account_time_create')->useCurrent();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_sellers');
    }
};
