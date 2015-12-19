<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OfficerRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers = \App\Officer::orderBy('last_name','DESC')->get();
        return view('pages.officer.index', compact('officers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.officer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfficerRequest $request)
    {
        $officer= \App\Officer::create($request->all());
		flash()->success('Officer '.$officer->last_name.','.$officer->first_name.' successfully added!');
		return redirect('/officers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$officers = \App\Officer::findOrFail($id);
        return view('pages.officer.show',compact('officers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officers = \App\Officer::findOrFail($id);
        return view('pages.officer.edit',compact('officers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfficerRequest $request, $id)
    {
        $officers = \App\Officer::findOrFail($id);
		$officers->update($request->all());
		flash()->success('Officer '.$officers->last_name.','.$officers->first_name.' successfully updated!');
		return redirect('/officers');
    }

     public function delete($id)
    {
     	# Get the Officer to be deleted
     	$officer = \App\Officer::findOrFail($id);
		
		if(is_null($officer)) {
			flash()->info('Officer not found.');
			return redirect('/officers');
		}
		
		
		# First remove any project associated with this officer

		if($officer->projects()){
			$officer->projects()->delete();
		}
		# Then delete the officer
		$officer->delete();
		flash()->success('Officer '.$officer->last_name.','.$officer->first_name.' was deleted!');
    	return redirect('/officers');
    }
	    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ConfirmDelete($id)
    {
		# Get the Officer to be deleted
     	$officer = \App\Officer::findOrFail($id);
		return view('pages.officer.delete',compact('officer'));
    }
}
