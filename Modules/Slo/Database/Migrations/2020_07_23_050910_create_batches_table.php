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
            $table->string('batch_name', 100);
            $table->string('batch_code', 100)->nullable();
            $table->string('portfolio', 2)->nullable();
            $table->integer('max_student')->nullable();
            $table->date('batch_start_date')->nullable();
            $table->date('batch_end_date')->nullable();
            $table->tinyInteger('approved')->default(0);
            $table->integer('cId')->nullable();
            $table->integer('loan')->nullable();
            $table->integer('intake')->nullable();

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');

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
        Schema::table('batches', function (Blueprint $table) {
            $table->dropForeign('batches_course_id_foreign');
        });
        Schema::dropIfExists('batches');
    }
}
