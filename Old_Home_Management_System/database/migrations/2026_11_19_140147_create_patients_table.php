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
        Schema::create('patients', function (Blueprint $table) {
            //Primary Key
            $table->unsignedInteger('PatientID')->primary();

            //Regular Columns
            $table->string('FamilyCode');
            $table->string('EmergencyContact');
            $table->string('EmergencyContactName');
            $table->string('RelationContact');
            $table->string('PatientGroup');
            $table->date('AdmissionDate');

            //Foreign Key
            $table->foreign('PatientID')
                  ->references('UserID')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
