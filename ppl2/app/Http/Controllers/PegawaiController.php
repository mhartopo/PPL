<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pegawai

class PegawaiController extends Controller
{
    //
    public function getPegawai($nip) {
    	$peg = Pegawai::find('nip');
    	return $peg;
    }

    public function getAll() {
    	$peg = Pegawai::all();
    	return $peg;
    }

    public function getName($nip) {
    	$name = Pegawai::find('nip');
    	return $name->nama;
    }

    public function isValidNIP($nip) {
    	$res = Pegawai::find('nip');
    	return ($res != 0);
    }


    public function store(Request $request) {
        
    }

    public function update() {

    }

    public function patch() {

    }

    public function delete() {

    }
}
