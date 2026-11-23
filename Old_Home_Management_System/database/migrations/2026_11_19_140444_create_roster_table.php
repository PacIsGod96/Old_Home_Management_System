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
        Schema::create('roster', function (Blueprint $table) {
            //Primary Key
            $table->increments('RosterID');

            //Regular Columns
            $table->date('RosterDate');

            //Foreign Key
            $table->unsignedInteger('SupervisorID');
            $table->unsignedInteger('DoctorID');

            $table->foreign('SupervisorID')
                  ->references('EmployeeID')
                  ->on('employees');

            $table->foreign('DoctorID')
                  ->references('EmployeeID')
                  ->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roster');
    }
};
