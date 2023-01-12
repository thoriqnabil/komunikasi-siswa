<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    public function index(){
        $data = Pelanggaran::all();
        return view('pelanggaran', compact('data'));
    }

    public function tambahpelanggaran(){
        return view ('tambahpelanggaran');
    }

    public function insertdata3(Request $request){
        $data = Pelanggaran::create($request->all());
        return redirect()->route('pelanggaran')->with('succes','Data Berhasil Di Tambahkan');
    }

    public function tampilpelanggaran($id){
        $data = Pelanggaran::find($id);
        return view('tampilpelanggaran', compact('data'));
    }

    public function updatepelanggaran(Request $request, $id){
        $data = Pelanggaran::find($id);
        $data->update($request->all());
        return redirect()->route('pelanggaran')->with('succes','Data Berhasil Di ubah');
    }
}
