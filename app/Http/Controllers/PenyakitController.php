<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function refreshPenyakit()
    {
        $datas['penyakits'] = Penyakit::all();

        return response()->json($datas);
    }

    public function getPenyakit(Penyakit $penyakit)
    {
        $datas['penyakit'] = $penyakit;
        
        return response()->json($datas);
    }
}
