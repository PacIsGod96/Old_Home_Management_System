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
        Schema::create('roster_caregiver', function (Blueprint $table) {
            //Primary Key
            $table->increments('RosterCaregiverID');

            //Regular Column
            $table->string('PatientGroup');

            //Foreign Key
            $table->unsignedInteger('RosterID');
            $table->unsignedInteger('CaregiverID');

            $table->foreign('RosterID')
                  ->references('RosterID')
                  ->on('roster');

            $table->foreign('CaregiverID')
                  ->references('EmployeeID')
                  ->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roster_caregiver');
    }
};
