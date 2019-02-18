<?php

namespace App\Http\Controllers;

use App\Models\Tester;
use Illuminate\Http\Request;

class TesterController extends Controller
{
    public function checkValidate(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3|max:50',
            'umur' => 'required|numeric|max:200',
            'jenis_kelamin' => 'required|in:l,p'
        ]);

        return response()->json($request->all());
    }

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
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function show(Tester $tester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function edit(Tester $tester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tester $tester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tester $tester)
    {
        //
    }
}
