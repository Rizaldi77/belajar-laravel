<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class AgencyController extends Controller
{
    public function index() {
        $crud = Crud::all();
        return view("pages.dashboard.agency.index")->with(compact("agency"));
    }

    public function detail($id) {
        $srud = Crud::find($id);
        return view("pages.dashboard.agency.detail")->with(compact("agency"));
    }

    public function update($id) {
        $crud = Crud::find($id);
        return view("pages.dashboard.agency.update")->with(compact("agency"));
    }

    public function delete($id) {
        $delete = Crud::find($id)->delete();
        $crud = Crud::all();

        if($delete) {
            return redirect()->route('agency')->with('message', 'Berhasil Menghapus Dinas');
        }else {
            return redirect()->route('agency')->with('message', 'Gagal Menghapus Dinas');
        }
    }
}