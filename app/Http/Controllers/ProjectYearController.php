<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects=\App\Project::findOrFail($id);
		$companyname=$projects->company->company_name;
		$projectid=$id;
		return view('pages.project_year.index',compact('projects','companyname','projectid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id , $id2)
	{
		//dd($id,$id2);
		$projects=\App\Project::findOrFail($id);
		$years=$projects->years()->where('year_id',$id2);
		//dd($years);
		$projectid=$id;
		$yearid=$id2;
		//@foreach($projects->years as $year)
		//	@if ($year->pivot->project_id==$id)
		//@endforeach
		
		
	
		//$companyname=$projects->company->company_name;
		//$years_for_dropdown=  \App\Year::lists('year','id');
        return view('pages.project_year.edit',compact('projects','projectid','yearid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
