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
}
