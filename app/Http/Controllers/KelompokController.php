<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kelompok;

class KelompokController extends Controller
{

    public function index()
    {
        $k1 = Kelompok::where('kelompok', '1')->orderBy('nrp')->get();
        $k2 = Kelompok::where('kelompok', '2')->orderBy('nrp')->get();
        $k3 = Kelompok::where('kelompok', '3')->orderBy('nrp')->get();
        $k4 = Kelompok::where('kelompok', '4')->orderBy('nrp')->get();
        $k5 = Kelompok::where('kelompok', '5')->orderBy('nrp')->get();
        $k6 = Kelompok::where('kelompok', '6')->orderBy('nrp')->get();
        $k7 = Kelompok::where('kelompok', '7')->orderBy('nrp')->get();
        $k8 = Kelompok::where('kelompok', '8')->orderBy('nrp')->get();
        $k9 = Kelompok::where('kelompok', '9')->orderBy('nrp')->get();
        $k10 = Kelompok::where('kelompok', '10')->orderBy('nrp')->get();
        $k11 = Kelompok::where('kelompok', '11')->orderBy('nrp')->get();
        $k12 = Kelompok::where('kelompok', '12')->orderBy('nrp')->get();
        $kelompok = array($k1, $k2, $k3, $k4, $k5, $k6, $k7, $k8, $k9, $k10, $k11, $k12);

        $s1 = Kelompok::where('satgas', '1')->orderBy('nrp')->get();
        $s2 = Kelompok::where('satgas', '2')->orderBy('nrp')->get();
        $s3 = Kelompok::where('satgas', '3')->orderBy('nrp')->get();
        $s4 = Kelompok::where('satgas', '4')->orderBy('nrp')->get();
        $s5 = Kelompok::where('satgas', '5')->orderBy('nrp')->get();
        $s6 = Kelompok::where('satgas', '6')->orderBy('nrp')->get();
        $s7 = Kelompok::where('satgas', '7')->orderBy('nrp')->get();
        $satgas = array($s1,$s2,$s3,$s4,$s5,$s6,$s7);

    	return view('oxygen/anggota', compact('kelompok','satgas', 's1', 's2', 's3', 's4', 's5', 's6', 's7'));
    }
}
