<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable= [
		'new_employment_commit',
		'award_percent',
		'company_id',
		'officer_id'
	];
    public function company() {
        # Project belongs to Company
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\App\Company');
    }
    
    public function officer() {
        # Project belongs to Officer
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\App\Officer');
    }
    
     public function years() {
        # Project has many years
        # Define a many-to-many relationship.
       	return $this->belongsToMany('\App\Year')->withTimestamps();
		 
    }
	
	public function getYearListAttribute()
	{
		return $this->years->lists('id');
	}
}
