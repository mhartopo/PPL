<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PendidikanFormal;

use App\Http\Controllers\Redirect;

class PendFormalController extends Controller
{
    //
    public function getAll() {
    	$pend = PendidikanFormal::all()->sortby('nip');
    	$nip = null;
    	return view('pages.pendidikanPegawai',compact('pend','nip'));
    }

    public function getPendidikan($nip) {
    	$pend = PendidikanFormal::where('nip',$nip)->get();
    	return view('pages.pendidikanPegawai',compact('pend','nip'));;
    }

    public function store(Request $request) {
        $formal = new PendidikanFormal;

        $formal->nip = $request->input('nip');
        $formal->nama_institusi = $request->input('nama_institusi');
        $formal->tingkatan = $request->input('tingkatan');
        $formal->gelar = $request->input('gelar');
        $formal->jurusan = $request->input('jurusan');
        $formal->no_ijazah = $request->input('no_ijazah');
        $formal->tahun = $request->input('tahun');
        $formal->save();

    	return Redirect::to('pendidikan-formal')
    	->with('message', 'Berhasil ditambahkan');
    }
}
