<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getindex()
    {
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
		$companies = \App\Company::findOrFail($id);
		$project = new \App\Project;
		$officers_for_dropdown=  \App\Officer::lists('last_name','id');
		$yearslist= \App\Year::lists('year','id');
		return view('pages.project.create',compact('officers_for_dropdown','companies','yearslist','project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
		$project = \App\Project::create($request->all());
		$project->years()->attach($request->input('year_list'));	
		flash()->success('Project '.$project->id.' successfully added to company '.$request->company_name);
		return redirect('/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = \App\Project::where('company_id',$id)->get();
	    $companies= \App\Company::where('id',$id)->get();
		return view('pages.project.index',compact ('projects','companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		
        $project = \App\Project::findOrFail($id);
		$yearslist= \App\Year::lists('year','id');
		$companies=\App\Company::findOrFail($project->company_id);
		$officers_for_dropdown=  \App\Officer::lists('last_name','id');
        return view('pages.project.edit',compact('project','companies','officers_for_dropdown','yearslist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
	    $project = \App\Project::findOrFail($id);
		$project->update($request->all());
		$project->years()->sync($request->input('year_list'));	
		$company=$project->company;
		flash()->success('Project '.$project->id. ' of Company '.$company->company_name.' successfully updated!');
		return redirect()->action('ProjectController@show', $project->company->id);
	}
     public function delete($id)
    {
     	# Get the Project to be deleted
		$project = \App\Project::findOrFail($id);
		$company =$project->company;
		if(is_null($project)) {
			flash()->info('Project not found.');
			return redirect('/projects');
		}
	
		# Then delete the project
		$project->delete();
		flash()->success('Project '.$project->id.' of Company '.$company->company_name.' was deleted!');
    	return redirect('/companies');
    }
	    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ConfirmDelete($id)
    {
		# Get the Project to be deleted
     	$project = \App\Project::findOrFail($id);
		return view('pages.project.delete',compact('project'));
    }
}
