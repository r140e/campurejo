<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Anggota;

class StrukturController extends Controller
{

    public function index()
    {
        for($i=1;$i<=Anggota::max('kelompok');$i++){
            $nama_kelompok[$i] = DB::table('kelompok_keterangan')->where('kelompok', '=', $i)->get();
            $kelompok[$i] = Anggota::where('kelompok', '=', $i)->orderBy('nrp')->get();
        };


        for($i=1;$i<=DB::table('satgas_keterangan')->max('satgas');$i++){
            $nama_satgas[$i] = DB::table('satgas_keterangan')->where('satgas', '=', $i)->get();
            $satgas[$i] = Anggota::where('satgas', '=', $i)->orderBy('nrp')->get();
        };

    	return view('oxygen/anggota', compact('kelompok','nama_kelompok','satgas', 'nama_satgas'));
    }
}