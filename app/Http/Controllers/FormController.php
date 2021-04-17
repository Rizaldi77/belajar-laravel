<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;

class FormController extends Controller
{
    public function create()
    {
    	return view('pages.form');
    }

    public function proses(Request $request)
    {
        $loket = $request->loket;
 
        return view('pages.proses', ['input' => $loket]);
    }
    
}
