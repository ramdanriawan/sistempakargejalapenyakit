<?php

namespace App\Http\Controllers;

use App\Models\Tested;
use App\Models\Tester;
use Illuminate\Http\Request;

class TestedController extends Controller
{
    public function store(Request $request)
    {
        $testerCreate = Tester::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        $testerCreate->save();
        $testerId = $testerCreate->id;
        
        Tested::create([
            'tester_id' => $testerId,
            'hasil' => $request->range,
            'keterangan' => $request->keterangan
        ]);
            
        return response()->json(['id' => $testerId]);
    }
}
