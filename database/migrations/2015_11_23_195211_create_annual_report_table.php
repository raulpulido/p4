<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnual_reportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('annual_report', function (Blueprint $table) 
        {
            # Increments method will make a Primary, Auto-Incrementing field.
            $table->increments('id');
            # The rest of the fields...
            $table->integer('project_id')->unsigned();
            $table->integer('year_id')->unsigned();
            $table->integer('total_nj_employees');
            $table->integer('total_beip_employees');
            $table->integer('total_terminations');
            $table->integer('award_percent');
            $table->integer('adjust_nec');
            
            # Define the primary key
           // $table->primary(['project_id', 'year']);
            
            
            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
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
        Schema::drop('annual_report');
    }
}
