<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoketController extends Controller
{
    public function index()
    {
   // mengambil data dari table pegawai
   $loket = DB::table('loket')->get();
 
   // mengirim data pegawai ke view index
   return view('welcome',['loket' => $loket]);
}
}