<?php

namespace App\Http\Controllers;

use App\Models\Dagur;
use Illuminate\Http\Request;

class DagurController extends Controller
{
    public function index(){
        $data = Dagur::all();
        return view ('dataguru', compact('data'));
    }

    public function tambahdagur(){
        return view ('tambahdagur');
    }

    public function insertdata2(Request $request){
        $data = Dagur::create($request->all());
        return redirect()->route('guru')->with('succes','Data Berhasil Di Tambahkan');
    }

    public function tampildagur($id){
        $data = Dagur::find($id);
        return view('tampildagur', compact('data'));
    }

    public function updatedagur(Request $request, $id){
        $data = Dagur::find($id);
        $data->update($request->all());
        return redirect()->route('guru')->with('succes','Data Berhasil Di ubah');
    }

    public function deletedagur($id){
        $data = Dagur::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('succes','Data Berhasil Di Hapus');
    }
}
