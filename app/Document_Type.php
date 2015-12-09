<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_Type extends Model
{
	protected $fillable= [
		'document_name'
	];
		
	
    public function annual_report() {
        # Year has many Annual Report
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Annual_Report');
    }
}
