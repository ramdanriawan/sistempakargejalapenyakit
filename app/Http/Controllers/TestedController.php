<?php

namespace App\Http\Controllers;

use App\Models\Tested;
use App\Models\Tester;
use Illuminate\Http\Request;

class TestedController extends Controller
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
        $testerCreate = Tester::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        $testerId = $testerCreate->id;
        $testerCreate->save();

        Tested::create([
            'tester_id' => $testerId,
            'hasil' => $request->range,
            'keterangan' => $request->keterangan
        ]);

        return response()->json(['id' => $testerId]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tested  $tested
     * @return \Illuminate\Http\Response
     */
    public function show(Tested $tested)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tested  $tested
     * @return \Illuminate\Http\Response
     */
    public function edit(Tested $tested)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tested  $tested
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tested $tested)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tested  $tested
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tested $tested)
    {
        //
    }
}
