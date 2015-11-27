<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
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
    
     public function annualreport() {
        # Project has many Annual_Report records
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Annual_Report');
    }
}
