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
        Schema::create('appointments', function (Blueprint $table) {
            //Primary Key
            $table->increments('AppointmentID');

            //Regular Columns
            $table->date('AppointmentDate');

            //Foreign Key
            $table->unsignedInteger('PatientID');
            $table->unsignedInteger('DoctoreID');
            
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
        Schema::dropIfExists('appointments');
    }
};
