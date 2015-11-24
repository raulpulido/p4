<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('years', function (Blueprint $table) 
        {
            $table->integer('year');
            $table->primary('year');
            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps();

            # The rest of the fields...
           
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('years');
    }
}
