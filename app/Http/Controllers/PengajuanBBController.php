<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class PengajuanBBController extends Controller
{
    public function index(){
        $data = DB::select('SELECT * FROM pengajuan_bb');
        return view('pengajuan.barang_baru.index', compact('data'));
    }

    private function getManajemen(): Collection
    {
        return collect(DB::select('SELECT * FROM manajemen'));
    }

    private function getKaprog(): Collection
    {
        return collect(DB::select('SELECT * FROM kaprog'));
    }

    public function formTambah(){
        $manajemen = $this->getManajemen();
        $kaprog = $this->getKaprog();
        return view('pengajuan.barang_baru.formtambah', compact('manajemen', 'kaprog'));
    }

    private function getPengajuanBb($id)
    {
        return collect(DB::select('SELECT * FROM pengajuan_bb WHERE id_pengajuan_bb = ?', [$id]))->firstOrFail();
    }

    public function store(Request $request)
    {
        try {

        $tambah_pengajuan_bb = DB::insert("CALL tambah_pengajuan_bb(:manajemen, :kaprog, :nama_barang, :spesifikasi, :harga_satuan, :total_harga, :jumlah, :ruangan)", [
            'manajemen' => $request->input('manajemen'),
            'kaprog' => $request->input('kaprog'),
            'nama_barang' => $request->input('nama_barang'),
            'spesifikasi' => $request->input('spesifikasi'),
            'harga_satuan' => $request->input('harga_satuan'),
            'total_harga' => $request->input('total_harga'),
            'jumlah' => $request->input('jumlah'),
            'ruangan' => $request->input('ruangan'),

            // dd($request->all())
        ]);

        if ($tambah_pengajuan_bb)
            return redirect('pengajuan/BB');
        else
            return "input data gagal";
        } catch (\Exception $e) {
        return  $e->getMessage();
        }
    }

    public function edit($id = null)
    {

        $edit = $this->getPengajuanBb($id);

        return view('pengajuan.barang_baru.editform', compact('edit'));
    }
    public function editsimpan(Request $request)
    {
        try {
            $data = [
                'nama_barang' => $request->input('nama_barang'),
                'spesifikasi' => $request->input('spesifikasi'),
                'harga_satuan' => $request->input('harga_satuan'),
                'total_harga' => $request->input('total_harga'),
                'jumlah' => $request->input('jumlah'),
            ];
            $upd = DB::table('pengajuan_bb')
                        ->where('id_pengajuan_bb', '=', $request->input('id_pengajuan_bb'))
                        ->update($data);
            if($upd){
                return redirect('pengajuan/BB');
            }
            // dd("berhasil", $upd);
        } catch (\Exception $e) {
            return $e->getMessage();
            dd("gagal");
        }
    }

    public function hapus($id=null){
        try{
            $hapus = DB::table('pengajuan_bb')
                            ->where('id_pengajuan_bb',$id)
                            ->delete();
            if($hapus){
                return redirect('pengajuan/BB');
            }
        }catch(\Exception $e){
            $e->getMessage();
        }
    }
}
