<?php

namespace Zplan\Storefinder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StorefinderController extends Controller
{
    //
    public function add($a, $b){
    	$result = $a + $b;
	return view('storefinder::add', compact('result'));
    }

    public function subtract($a, $b){
    	$result =  $a - $b;
	return view('storefinder::subtract', compact('result'));
    }
}
