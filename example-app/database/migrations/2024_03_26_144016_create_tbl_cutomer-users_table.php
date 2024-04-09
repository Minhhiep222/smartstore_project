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
        Schema::create('tbl_customer_users', function (Blueprint $table) {
            $table->id(); 
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->enum('sex', ['male', 'female', 'other']);
            $table->date('DOB');
            $table->string('img')->nullable();
            $table->text('address');
            $table->string('bank_Account')->nullable();
            $table->text('notification')->nullable();
            $table->integer('coin')->nullable();
            $table->timestamp('account_time_create')->nullable()->useCurrent();
       
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_customer_users');
    }
};
