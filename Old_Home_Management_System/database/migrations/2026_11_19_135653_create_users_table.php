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
        Schema::create('users', function (Blueprint $table) {
            //Primary Key
            $table->increments('UserID');

            //Regular Columns
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Email')->unique();
            $table->string('Phone')->nullable();
            $table->string('password');
            $table->date('DOB')->nullable();
            $table->boolean('IsApproved')->default(false);

            //Foreign Key
            $table->unsignedInteger('RoleID');
            $table->foreign('RoleID')
                  ->references('RoleID')
                  ->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
