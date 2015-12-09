<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable= [
		'company_name',
		'tax_id',
		'contact',
		'email'
	];
		
    public function project() {
        # Company has many Projects
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Project');
    }
}
