<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnualReport extends Model
{
    protected $fillable= [
		'total_nj_employees',
		'award_percent',
		'total_beip_employees',
		'total_terminations',
		'adjust_nec'
	];
}
