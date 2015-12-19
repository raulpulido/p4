<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Session;
use App\Http\Requests\CompanyRequest;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = \App\Company::orderBy('id','DESC')->get();
        return view('pages.company.index')->with('companies',$companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
		$company = \App\Company::create($request->all());
		flash()->success('Company '.$company->company_name.' successfully added!');
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
        $companies = \App\Company::findOrFail($id);
        return view('pages.company.show',compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = \App\Company::findOrFail($id);
        return view('pages.company.edit',compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        $companies = \App\Company::findOrFail($id);
		$companies->update($request->all());
		flash()->success('Company '.$companies->company_name.' successfully updated!');
		#dd(flash());
		return redirect('/companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
     	# Get the Company to be deleted
     	$company = \App\Company::findOrFail($id);
		
		if(is_null($company)) {
			flash()->info('Company not found.');
			return redirect('/companies');
		}
		
		
		# First remove any project associated with this company
		if($company->projects()){
			$company->projects()->delete();
		}
		# Then delete the company
		$company->delete();
		flash()->success('Company '.$company->company_name.' was deleted!');
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
		# Get the Company to be deleted
     	$company = \App\Company::findOrFail($id);
		return view('pages.company.delete',compact('company'));
    }
}
