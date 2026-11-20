<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void 
    {
        Schema::create('roles', function (Blueprint $table) {
            //Primary Key
            $table->increments('RoleID');

            //Regular Columns
            $table->string('RoleName');
            $table->integer('AccessLevel');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
