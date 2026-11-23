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
        Schema::create('payments', function (Blueprint $table) {
            //Primary Key
            $table->increments('PaymentID');

            //Regular Columns
            $table->decimal('AmmountPaid', 10, 2);
            $table->date('PaymentDate');

            //Foreign Key
            $table->unsignedInteger('PatientID');
            
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
        Schema::dropIfExists('payments');
    }
};
