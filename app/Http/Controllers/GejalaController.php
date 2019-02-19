<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;

use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function refreshGejala(Penyakit $penyakit)
    {
        $datas['gejalas'] = Gejala::where('penyakit_id', $penyakit->id)->get();

        return response()->json($datas);
    }
}
