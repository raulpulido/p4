<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AnnualReportRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'total_nj_employees' =>'required',
			'award_percent' =>'required',
			'total_beilp_employees' =>'required',
			'total_terminations' =>'required',
			'adjust_nec' =>'required',
        ];
    }
}
