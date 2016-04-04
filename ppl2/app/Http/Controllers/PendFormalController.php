<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PendidikanFormal;

use Session;

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

    public function edit($id) {
        $pend = PendidikanFormal::find($id);
        return view('pages.editFormal', compact('pend'));
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
        Session::flash('message', 'Pendidikan formal berhasil ditambahkan');
    	return \Redirect::to('pendidikan-formal');
    }

    public function update(Request $request, $id) {

        $formal = PendidikanFormal::find($id);
        
        $formal->nip = $request->input('nip');
        $formal->nama_institusi = $request->input('nama_institusi');
        $formal->tingkatan = $request->input('tingkatan');
        $formal->gelar = $request->input('gelar');
        $formal->jurusan = $request->input('jurusan');
        $formal->no_ijazah = $request->input('no_ijazah');
        $formal->tahun = $request->input('tahun');
        $formal->save();

       Session::flash('message', 'Pendidikan formal berhasil diperbaharui');
        return \Redirect::to('pendidikan-formal');
    }

    public function delete($id) {
        $formal = PendidikanFormal::find($id);
        $formal->delete();
        Session::flash('message', 'Pendidikan formal berhasil dihapus');
        return \Redirect::to('pendidikan-formal');
    }

    public function search(Request $request) {
        $res = $request->input('query');
        return \Redirect::to('pendidikan-formal/all/'.$res);   
    }
}
