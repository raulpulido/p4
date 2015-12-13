<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\Document_TypeRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Document_TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents_type = \App\Document_Type::orderBy('id','DESC')->get();
        return view('pages.document_type.index',compact('documents_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.document_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Document_TypeRequest $request)
    {
        \App\Document_Type::create($request->all());
		
		return redirect('/document_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documents = \App\Document_Type::findOrFail($id);
        return view('pages.documents_type.edit',compact('documents'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Document_TypeRequest $request, $id)
    {
        $documents = \App\Document_Type::findOrFail($id);
		$documents->update($request->all());
		//Session::flash('flash_message', 'Document Type successfully updated!');
		return redirect('/document_type');
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
