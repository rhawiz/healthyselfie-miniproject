<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use vendor\laravel\framework\src\Illuminate\Support\Facades;
use Request;


class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		return view('programmes.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
		return view('programmes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
		$input = Request::all();
		$programme = new \App\Programme;
		$programme->name = $input['q1'];
		$programme->price_usd = (float) $input['q2'];
		$programme->gender = $input['q3'];
		$programme->weeks = (int) $input['q4'];
		$programme->training_days = (int) $input['q5'];
		$programme->description = $input['q6'];
		
		$programme->save();
		
				
		return view('programmes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
		$programme = \App\Programme::all();
		
        return \Response::json([
			'data' =>$programme
		], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
	

	
}
