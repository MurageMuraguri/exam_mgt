<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer(('lecturer_id'));
            $table->integer('external_examiner_id');
            $table->string('name');
            $table->integer('exam_period_id');
            $table->date('exam_date');
            $table->date('lecturer_deadline_1');
            $table->date('lecturer_deadline_2');
            $table->date('external_examiner_deadline');
            $table->integer('status')->default(0);
            $table->integer('external_approval')->default(0);
            $table->string('final_draft')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam');
    }
}
