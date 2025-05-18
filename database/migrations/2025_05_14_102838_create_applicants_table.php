<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_applicants_table.php
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('gender');
            $table->date('dob');
            $table->string('birth_reg_no')->nullable();
            $table->string('mobile', 11);
            $table->string('email')->unique();
            $table->integer('district');
            $table->integer('thana');
            $table->integer('school_id');
            $table->text('present_address');
            $table->string('profile_image')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
