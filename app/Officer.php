<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
	protected $fillable= [
		'first_name',
		'last_name',
		'email'
	];
		
    public function projects() {
        # Officer has many Projects
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Project');
    }
	
	public function getOfficerForDropdown(){
	
		$officers=$this->orderBy('last_name','ASC')->get();
		$officers_for_dropdown=[];
		foreach($officers as $officer) {
			$officers_for_dropdown[$officer->id]= $officer->last_name.','.$officer->first_name;
		}
		return $officers_for_dropdown;
	}
}
