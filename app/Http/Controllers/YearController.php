<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\YearRequest;
use App\Http\Controllers\Controller;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = \App\Year::orderBy('id','DESC')->get();
        return view('pages.year.index',compact('years'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('pages.year.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(YearRequest $request)
    {
		$year = \App\Year::create($request->all());
		flash()->success('Year successfully added!');
		return redirect('/years');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $years = \App\Year::findOrFail($id);
        return view('pages.year.show',compact('years'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $years = \App\Year::findOrFail($id);
        return view('pages.year.edit',compact('years'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(YearRequest $request, $id)
    {
		$years = \App\Year::findOrFail($id);
		$years->update($request->all());
		//$years->year=$request->year;
		//$years->cpi=$request->cpi;
		//$years->save();
		flash()->success('Year '.$years->year.' successfully updated!');
		return redirect('/years');
	}
     public function delete($id)
    {
     	# Get the Year to be deleted
		$year = \App\Year::findOrFail($id);
		
		if(is_null($year)) {
			flash()->info('Year not found.');
			return redirect('/years');
		}
	
		# Then delete the year
		$year->delete();
		flash()->success('Year '.$year->year.' was deleted!');
    	return redirect('/years');
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
     	$year = \App\Year::findOrFail($id);
		return view('pages.year.delete',compact('year'));
    }
}
