<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addinfos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('trainees','id');
            $table->string('first_nm');
            $table->string('last_nm');
            $table->string('relationship');
            $table->string('contact_nbr');
            $table->string('email');
            $table->string('street_1');
            $table->string('street_2');
            $table->string('town');
            $table->string('Parish');
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
        Schema::dropIfExists('addinfos');
    }
}
