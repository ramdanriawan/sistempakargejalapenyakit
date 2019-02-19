<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function store(Request $request)
    {
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
}









