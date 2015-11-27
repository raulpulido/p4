<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annual_Report extends Model
{
    public function project() {
        # Annual Report belongs to Project
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\App\Project');
    }
    
    public function year() {
        # Annual Report belongs to Year
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\App\Year');
    }
}
