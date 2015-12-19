<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
	protected $fillable= [
		'year',
		'cpi',
	];
    public function projects() {
     # Year has many projects
        # Define a many-to-many relationship.
       	return $this->belongsToMany('\App\Project');
    }
}
