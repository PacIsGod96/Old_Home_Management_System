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
        Schema::create('prescriptions', function (Blueprint $table) {
            //Primary Key
            $table->increments('PrescriptionID')->unique();

            //Regular Columns
            $table->date('Date');
            $table->string('Comment')->nullable();
            $table->string('MorningMed')->nullable();
            $table->string('AfternoonMed')->nullable();
            $table->string('NightMed')->nullable();

            //Foreign Key
            $table->unsignedInteger('AppointmentID');

            $table->foreign('AppointmentID')
                  ->references('AppointmentID')
                  ->on('appointments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
