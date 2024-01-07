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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('identifier')->unique();
            $table->string('real_name');
            $table->string('name')->unique();
            $table->string('slack_name');
            $table->string('email')->unique();
            $table->string('cellphone')->unique();
            $table->string('bank_name');
            $table->string('bank_account')->unique();
            $table->string('bank_branch')->nullable();
            $table->string('bank_branch_code')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
