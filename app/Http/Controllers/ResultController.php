<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
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
        foreach( $request->all() as $id => $jawaban)
        {
            if ( $id != 'tester_id' && $id != '_token' && $id != 'action' ) 
            {
                if ( $jawaban == 'tidak' )
                    $hasil = 0;
                else if ( $jawaban == 'tidak lagi' )
                    $hasil = .25;
                else if ( $jawaban == 'sedikit' )
                    $hasil = .50;
                else if ( $jawaban == 'sedang' )
                    $hasil = .75;
                else if ( $jawaban == 'parah' )
                    $hasil = 1;

                Result::create([
                    'tester_id' => $request->all()['tester_id'],
                    'gejala_id' => $id,
                    'jawaban' => $jawaban,
                    'hasil' => $hasil
                ]);            
            }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
