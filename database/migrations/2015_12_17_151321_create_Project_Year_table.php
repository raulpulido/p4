<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('project_year', function (Blueprint $table) 
        {
            # Increments method will make a Primary, Auto-Incrementing field.
            $table->increments('id');
			$table->timestamps();
            # The rest of the fields...
            $table->integer('project_id')->unsigned();
            $table->integer('year_id')->unsigned();
           	# Define Foreing Keys
			$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
			$table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
        });  
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_year');
    }
}
