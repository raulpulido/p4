<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    public function project() {
        # Officer has many Projects
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Project');
    }
}
