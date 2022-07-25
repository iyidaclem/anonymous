<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('user_id')->unique();
            $table->string('phone_number')->unique()->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('current_location')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('email_verified')->nullable();
            $table->string('balance')->nullable();
            $table->string('refered_by')->nullable();
            $table->string('reg_date')->nullable();
            $table->string('email_code')->nullable();
            $table->string('account_status')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('gender')->nullable();
            $table->string('role')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('category')->nullable();
            $table->string("pass_reset_code")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
