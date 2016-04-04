<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Institusi;

class InstitusiController extends Controller
{
    //
    public function getAll() {
    	$institusi = Institusi::all();
    	return $institusi;
    }
}
