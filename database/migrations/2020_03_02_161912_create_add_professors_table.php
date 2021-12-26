<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_professors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('professor_first_name');
            $table->string('professor_last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('joining_date');
            $table->string('password');
            $table->string('designation');
            $table->string('department');
            $table->enum('gender',['male','female']);
            $table->string('phone');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('image');
            $table->string('education');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_professors');
    }
}
