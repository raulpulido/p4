<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportingDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supporting_documents', function (Blueprint $table) 
        {    
         # Increments method will make a Primary, Auto-Incrementing field.
            $table->increments('id');

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps();

            # The rest of the fields...
            $table->string('document_name');
            $table->string('path');
            $table->integer('project_id')->unsigned();
            $table->integer('year')->unsigned();
            //$table->foreign('project_id')->references('id')->on('projects');
            //$table->foreign('year')->references('year')->on('years');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('supporting_documents');
    }
}
