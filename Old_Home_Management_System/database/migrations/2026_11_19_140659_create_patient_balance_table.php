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
        Schema::create('patient_balance', function (Blueprint $table) {
            //Primary Key
            $table->unsignedInteger('PatientID')->primary();

            //Regular Columns
            $table->decimal('TotalDue', 10, 2)->default(0);
            $table->date('LastUpdated');

            //Foreign Key
            $table->foreign('PatientID')
                  ->references('PatientID')
                  ->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_balance');
    }
};
