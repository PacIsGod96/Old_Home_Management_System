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
        Schema::create('employees', function (Blueprint $table) {
            //Primary Key
            $table->unsignedInteger('EmployeeID')->primary();

            //Regular Columns
            $table->decimal('Salary', 10, 2)->default(0);

            //Foreign Key
            $table->foreign('EmployeeID')
                  ->references('UserID')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
