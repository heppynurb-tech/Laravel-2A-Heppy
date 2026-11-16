<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga(Request $request): View
    {
        $alas = null;
        $tinggi = null;
        $luas = null;

        if ($request->query('alas') !== null || $request->query('tinggi') !== null) {
            $data = $request->validate([
                'alas' => ['required', 'numeric', 'gt:0'],
                'tinggi' => ['required', 'numeric', 'gt:0'],
            ]);

            $alas = (float) $data['alas'];
            $tinggi = (float) $data['tinggi'];
            $luas = $alas * $tinggi / 2;
        }

        return view('kalkulator.segitiga', compact('alas', 'tinggi', 'luas'));
    }
}
