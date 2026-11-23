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
        Schema::create('approvals', function (Blueprint $table) {
            //Primary Key
            $table->increments('ApprovalID');

            //Regular Columns
            $table->date('ApproveDate');
            $table->boolean('IsApproved')->default(false);

            //Foriegn Key
            $table->unsignedInteger('UserID');
            $table->unsignedInteger('ApprovedBy');
            
            $table->foreign('UserID')
                  ->references('UserID')
                  ->on('users');

            $table->foreign('ApprovedBy')
                  ->references('UserID')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvals');
    }
};
