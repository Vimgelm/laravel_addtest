<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> string('test_id');
            $table-> string('question');
            $table-> string('answer1');
            $table-> string('answer2');
            $table-> string('answer3');
            $table-> string('answer4');
            $table-> boolean('check1');
            $table-> boolean('check2');
            $table-> boolean('check3');
            $table-> boolean('check4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
