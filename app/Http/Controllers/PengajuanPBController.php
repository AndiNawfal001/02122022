<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class PengajuanPBController extends Controller
{
    public function index(){
        $data = DB::select('SELECT * FROM pengajuan_pb');
        return view('pengajuan.perbaikan.index', compact('data'));
    }

    private function getManajemen(): Collection
    {
        return collect(DB::select('SELECT * FROM manajemen'));
    }

    private function getKaprog(): Collection
    {
        return collect(DB::select('SELECT * FROM kaprog'));
    }

    private function getBarang(): Collection
    {
        return collect(DB::select('SELECT * FROM barang'));
    }

    public function formTambah(){
        $manajemen = $this->getManajemen();
        $kaprog = $this->getKaprog();
        $barang = $this->getBarang();

        return view('pengajuan.perbaikan.formtambah', compact('manajemen', 'kaprog', 'barang'));
    }

    private function getPengajuanPb($id)
    {
        return collect(DB::select('SELECT * FROM pengajuan_pb WHERE id_pengajuan_pb = ?', [$id]))->firstOrFail();
    }

    public function store(Request $request)
    {
        try {

        $tambah_pengajuan_pb = DB::insert("CALL tambah_pengajuan_pb(:manajemen, :kaprog, :nama_barang, :ruangan)", [
            'manajemen' => $request->input('manajemen'),
            'kaprog' => $request->input('kaprog'),
            'nama_barang' => $request->input('nama_barang'),  
            'ruangan' => $request->input('ruangan'),

            // dd($request->all())
        ]);

        if ($tambah_pengajuan_pb)
            return redirect('pengajuan/PB');
        else
            return "input data gagal";
        } catch (\Exception $e) {
        return  $e->getMessage();
        }
    }

    public function edit($id = null)
    {

        $edit = $this->getPengajuanPb($id);

        return view('pengajuan.perbaikan.editform', compact('edit'));
    }
    public function editsimpan(Request $request)
    {
        try {
            $data = [
                'manajemen' => $request->input('manajemen'),
                'kaprog' => $request->input('kaprog'),
                'nama_barang' => $request->input('nama_barang'),  
                'ruangan' => $request->input('ruangan'),

            ];
            $upd = DB::table('pengajuan_pb')
                        ->where('id_pengajuan_pb', '=', $request->input('id_pengajuan_pb'))
                        ->update($data);
            if($upd){
                return redirect('pengajuan/PB');
            }
            // dd("berhasil", $upd);
        } catch (\Exception $e) {
            return $e->getMessage();
            dd("gagal");
        }
    }

    public function hapus($id=null){
        try{
            $hapus = DB::table('pengajuan_pb')
                            ->where('id_pengajuan_pb',$id)
                            ->delete();
            if($hapus){
                return redirect('pengajuan/PB');
            }
        }catch(\Exception $e){
            $e->getMessage();
        }
    }
}
