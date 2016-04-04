<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\PendidikanRequest;

use App\PendidikanFormal;

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
    	return \Redirect::route('pendidikan')
    	->with('message', 'Berhasil ditambahkan');
    }
}
