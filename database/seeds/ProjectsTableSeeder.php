<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company_id = \App\Company::where('company_name','=','ACME Corporation')->pluck('id');
        $officer_id = \App\Officer::where('last_name','=','Bale')->pluck('id');
        DB::table('projects')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'new_employment_commit' => 200,
        'award_percent' => 85,
        'company_id' => $company_id,
        'officer_id' => $officer_id,     
        ]);
        $company_id = \App\Company::where('company_name','=','The ABC Corporation')->pluck('id');
        $officer_id = \App\Officer::where('last_name','=','Ronaldo')->pluck('id');
        DB::table('projects')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'new_employment_commit' => 200,
        'award_percent' => 65,
        'company_id' => $company_id,
        'officer_id' => $officer_id,     
        ]);
        $company_id = \App\Company::where('company_name','=','YXZ Corporation')->pluck('id');
        $officer_id = \App\Officer::where('last_name','=','Chan')->pluck('id');
        DB::table('projects')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'new_employment_commit' => 200,
        'award_percent' => 50,
        'company_id' => $company_id,
        'officer_id' => $officer_id,     
        ]);
        
        $company_id = \App\Company::where('company_name','=','DIC Consulting Group')->pluck('id');
        $officer_id = \App\Officer::where('last_name','=','Guerrero')->pluck('id');
        DB::table('projects')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'new_employment_commit' => 200,
        'award_percent' => 80,
        'company_id' => $company_id,
        'officer_id' => $officer_id,     
        ]);
        
        $company_id = \App\Company::where('company_name','=','ACME Corporation')->pluck('id');
        $officer_id = \App\Officer::where('last_name','=','Bale')->pluck('id');
        DB::table('projects')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'new_employment_commit' => 200,
        'award_percent' => 75,
        'company_id' => $company_id,
        'officer_id' => $officer_id,     
        ]);
    }
}
