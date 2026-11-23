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
        Schema::create('daily_logs', function (Blueprint $table) {
            //Primary Key
            $table->increments('LogID');

            //Regular Columns
            $table->date('LogDate');
            $table->boolean('MorningMedTaken')->nullable();
            $table->boolean('AfternoonMedTaken')->nullable();
            $table->boolean('NightMedTaken')->nullable();
            $table->string('Breakfast');
            $table->string('Lunch');
            $table->string('Dinner');

            //Foreign Key
            $table->unsignedInteger('PatientID');
            $table->unsignedInteger('CaregiverID');
            
            $table->foreign('PatientID')
                  ->references('PatientID')
                  ->on('patients');

            $table->foreign('EmployeeID')
                  ->references('EmployeeID')
                  ->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_logs');
    }
};
