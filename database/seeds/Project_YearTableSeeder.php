<?php

use Illuminate\Database\Seeder;

class Project_YearTableSeeder extends Seeder
{
        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		# First, create an array of all the projects we want to associate years with
		$projects =[ 1=>[1,2,3,4,5],
					 2=>[1,2,3,4,5],
					 3=>[1,2,5,7,8],
					 4=>[1,2,3,4,5,6,7,8]
		];

		# Now loop through the above array, creating a new pivot for each book to tag
		foreach($projects as $projectid => $years) {

			# First get the project
			$project = \App\Project::where('id','like',$projectid)->first();

			# Now loop through each year for this project, adding the pivot
			foreach($years as $yearid) {
				$year = \App\Year::where('id','LIKE',$yearid)->first();

				# Connect this tag to this book
				$project->years()->save($year);
			}

		}
    }
}
