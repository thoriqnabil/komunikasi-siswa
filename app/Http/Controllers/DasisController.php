<?php

namespace App\Http\Controllers;

use App\Models\Dagur;
use App\Models\Dasis;
use App\Models\Pelanggaran;
use App\Models\Pelanggaransiswaa;
use Illuminate\Http\Request;

class DasisController extends Controller
{
    public function dashboard()
    {
        $data = Dasis::with(['pelanggaran', "guru"])->get();
        // dd($data);
        return view('dashboard',compact('data'));
    }

    public function tambahpoin(){
        $data = Dasis::all();
        $dataa = Pelanggaran::all();
        return view('tambahpoin', compact('data', 'dataa'));
    }

    public function insertdata4(Request $request){
        $data = Pelanggaransiswaa::create([
            "dasis_id"=>"$request->dasis_id",
            "pelanggaran_id"=>"$request->pelanggaran_id",
        ]);
        return redirect("/")->with("Succes", "Data Berhasil Ditambahkan");
    }

    public function index(){
        $data = Dasis::all();
        $walas = Dagur::all();
        return view ('datasiswa', compact('data','walas'));
    }

    public function tambahdasis(){
        $walas = Dagur::all();
        return view ('tambahdasis', compact('walas'));
    }

    public function insertdata(Request $request){
        $data = Dasis::create($request->all());
        return redirect()->route('siswa')->with('succes','Data Berhasil Di Tambahkan');
    }

    public function tampildasis($id){
        $data = Dasis::find($id);
        $walas = Dagur::all();
        return view('tampildasis', compact('data'), compact('walas'));
    }

    public function updatedata(Request $request, $id){
        $data = Dasis::find($id);
        $data->update($request->all());
        return redirect()->route('siswa')->with('succes','Data Berhasil Di ubah');
    }

    public function delete($id){
        $data = Dasis::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('succes','Data Berhasil Di Hapus');
    }

    public function detailsiswa($id) {
        
        $data = Dasis::with(["pelanggaran","guru"])->find($id);
        return view('detailsiswa', compact('data'));
    }
}
