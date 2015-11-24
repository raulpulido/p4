<?php

use Illuminate\Database\Seeder;

class OfficersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('officers')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Nicole',
            'last_name' => 'Bale',
            'email' => 'NBale@njeda.com',
        ]);
        
        DB::table('officers')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'John',
            'last_name' => 'Ronaldo',
            'email' => 'JRonaldo@njeda.com',
        ]);
        
        DB::table('officers')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Lee',
            'last_name' => 'Chan',
            'email' => 'LChan@njeda.com',
        ]);
        
        DB::table('officers')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Nicolas',
            'last_name' => 'Guerrero',
            'email' => 'NGuerrero@njeda.com',
        ]);

    }
}
