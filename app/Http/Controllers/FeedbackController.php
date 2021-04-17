<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;

class FeedbackController extends Controller
{
    public function create()
    {
    	return view('pages.input_nourut');
    }

    public function proses(Request $request)
    {
        $no_urut = $request->no_urut;
        $kepuasan = $request->kepuasan;
 
        return view('pages.feedback', ['no_urut' => $no_urut, 'kepuasan' => $kepuasan ]);
    }
}
