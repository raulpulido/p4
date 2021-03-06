<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
			$this->call(UsersTableSeeder::class);
            $this->call(CompaniesTableSeeder::class);
            $this->call(OfficersTableSeeder::class);
            $this->call(YearsTableSeeder::class);
            $this->call(DocumentsTypeTableSeeder::class);
            $this->call(ProjectsTableSeeder::class);
			$this->call(Project_YearTableSeeder::class);
        Model::reguard();
    }
}
