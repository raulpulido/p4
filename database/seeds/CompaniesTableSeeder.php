<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'company_name' => 'ACME Corporation',
            'tax_id' => '15-2020357',
            'contact' => 'Howard Smith',
            'email' => 'Howard.Smith@acme.com',
        ]);

        DB::table('companies')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'company_name' => 'The ABC Corporation',
            'tax_id' => '25-2020307',
            'contact' => 'Fred Warrent',
            'email' => 'Fred.Warrent@abc.com',
        ]);

        DB::table('companies')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'company_name' => 'YXZ Corporation',
            'tax_id' => '20-2032035',
            'contact' => 'Ruth Ballen',
            'email' => 'Ruth.Ballen@YXZ.com',
        ]);
        
        DB::table('companies')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'company_name' => 'DIC Consulting Group',
            'tax_id' => '20-2036007',
            'contact' => 'Raul Pulido',
            'email' => 'Raul.Pulido@DICGroup.com',
        ]);
    }
}
