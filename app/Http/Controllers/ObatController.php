<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function getObats($penyakit_id, $range, $range_min)
    {
        $datas['obats'] = Obat::where('penyakit_id', $penyakit_id)->where('range', '<=', $range)->where('range', '>=', $range_min)->get();

        return response()->json($datas);
    }
}
