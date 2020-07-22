<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id');
            // $table->foreign('course_id')->references('id')->on('courses');
            $table->string('batch_name', 100);
            $table->string('bStdView', 100)->nullable();
            $table->string('batch_code', 100)->nullable();
            $table->string('portfolio', 100)->nullable();
            $table->unsignedSmallInteger('max_student')->nullable();
            $table->date('batch_start_date')->nullable();
            $table->date('batch_end_date')->nullable();
            $table->boolean('loan')->nullable();
            $table->unsignedSmallInteger('intake')->nullable();
            $table->timestamps();

            $table->dateTime("updated_on")->nullable();
            $table->unsignedInteger("created_by")->nullable();
            $table->unsignedInteger("updated_by")->nullable();
            $table->unsignedInteger("deleted_by")->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batches');
    }
}
