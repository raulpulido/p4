<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectYearsAndAnnualreport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annual_report', function (Blueprint $table) {

            # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
            //$table->integer('company_id')->unsigned();

            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('year_id')->references('id')->on('years');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annual_report', function (Blueprint $table) {

            # ref: http://laravel.com/docs/5.1/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('annualreport_year_id_foreign');

        //    $table->dropColumn('company_id');
        });
    }}
