<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class RuanganController extends Controller
{
    public function index(){
        $data = DB::select('SELECT * FROM ruangan');
        return view('ruangan.index', compact('data'));
    }

    public function formTambah(){ 

        return view('ruangan.formtambah');
    }

    private function getRuangan($id)
    {
        return collect(DB::select('SELECT * FROM ruangan WHERE id_ruangan = ?', [$id]))->firstOrFail();
    }

    public function store(Request $request)
    {
        try {

        $tambah_ruangan = DB::insert("CALL tambah_ruangan(:nama_ruangan, :penanggung_jawab, :ket)", [
            'nama_ruangan' => $request->input('nama_ruangan'),
            'penanggung_jawab' => $request->input('penanggung_jawab'),
            'ket' => $request->input('ket'), 

            // dd($request->all())
        ]);

        if ($tambah_ruangan)
            return redirect('ruangan');
        else
            return "input data gagal";
        } catch (\Exception $e) {
        return  $e->getMessage();
        }
    }

    public function edit($id = null)
    {

        $edit = $this->getRuangan($id);

        return view('ruangan.editform', compact('edit'));
    }
    public function editsimpan(Request $request)
    {
        try {
            $data = [
                'nama_ruangan' => $request->input('nama_ruangan'),
                'penanggung_jawab' => $request->input('penanggung_jawab'),
                'ket' => $request->input('ket'), 

            ];
            $upd = DB::table('ruangan')
                        ->where('id_ruangan', '=', $request->input('id_ruangan'))
                        ->update($data);
            if($upd){
                return redirect('ruangan');
            }
            // dd("berhasil", $upd);
        } catch (\Exception $e) {
            return $e->getMessage();
            dd("gagal");
        }
    }

    public function hapus($id=null){
        try{
            $hapus = DB::table('ruangan')
                            ->where('id_ruangan',$id)
                            ->delete();
            if($hapus){
                return redirect('ruangan');
            }
        }catch(\Exception $e){
            $e->getMessage();
        }
    }
}
