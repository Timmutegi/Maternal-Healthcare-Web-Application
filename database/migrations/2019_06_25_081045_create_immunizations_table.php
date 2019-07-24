<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmunizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('immunizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('child_id')->unsigned();
            $table->foreign('child_id')->references('id')->on('children')->onDelete('cascade');      
            $table->datetime('bcg_at_birth');
            $table->datetime('opv_at_birth');
            $table->datetime('opv_at_6_weeks');
            $table->datetime('opv_at_10_weeks');
            $table->datetime('opv_at_14_weeks');
            $table->datetime('dpt_at_6_weeks');
            $table->datetime('dpt_at_10_weeks');
            $table->datetime('dpt_at_14_weeks');
            $table->datetime('pcv_at_6_weeks');
            $table->datetime('pcv_at_10_weeks');
            $table->datetime('pcv_at_14_weeks');
            $table->datetime('yellow_fever_at_9_months');
            $table->datetime('measles_at_9_months');
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
        Schema::dropIfExists('immunizations');
    }
}
