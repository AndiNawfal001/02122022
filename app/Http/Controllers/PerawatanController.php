<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class PerawatanController extends Controller{}
// {
//     public function index(){
//         $data = DB::select('SELECT * FROM perawatan');
//         return view('perawatan.index', compact('data'));
//     }

//     private function getBarang(): Collection
//     {
//         return collect(DB::select('SELECT * FROM barang'));
//     }

//     public function formTambah(){
//         $barang = $this->getBarang();

//         return view('perawatan.formtambah', compact('barang'));
//     }

//     private function getPerawatan($id)
//     {
//         return collect(DB::select('SELECT * FROM perawatan WHERE id_pe = ?', [$id]))->firstOrFail();
//     }

//     public function store(Request $request)
//     {
//         try {

//         $tambah_pengajuan_pb = DB::insert("CALL tambah_pengajuan_pb(:manajemen, :kaprog, :nama_barang, :ruangan)", [
//             'manajemen' => $request->input('manajemen'),
//             'kaprog' => $request->input('kaprog'),
//             'nama_barang' => $request->input('nama_barang'),
//             'ruangan' => $request->input('ruangan'),

//             // dd($request->all())
//         ]);

//         if ($tambah_pengajuan_pb)
//             return redirect('pengajuan/PB');
//         else
//             return "input data gagal";
//         } catch (\Exception $e) {
//         return  $e->getMessage();
//         }
//     }

//     public function edit($id = null)
//     {

//         $edit = $this->getPerawatan($id);

//         return view('pengajuan.perbaikan.editform', compact('edit'));
//     }
//     public function editsimpan(Request $request)
//     {
//         try {
//             $data = [
//                 'manajemen' => $request->input('manajemen'),
//                 'kaprog' => $request->input('kaprog'),
//                 'nama_barang' => $request->input('nama_barang'),
//                 'ruangan' => $request->input('ruangan'),

//             ];
//             $upd = DB::table('pengajuan_pb')
//                         ->where('id_pengajuan_pb', '=', $request->input('id_pengajuan_pb'))
//                         ->update($data);
//             if($upd){
//                 return redirect('pengajuan/PB');
//             }
//             // dd("berhasil", $upd);
//         } catch (\Exception $e) {
//             return $e->getMessage();
//             dd("gagal");
//         }
//     }

//     public function hapus($id=null){
//         try{
//             $hapus = DB::table('pengajuan_pb')
//                             ->where('id_pengajuan_pb',$id)
//                             ->delete();
//             if($hapus){
//                 return redirect('pengajuan/PB');
//             }
//         }catch(\Exception $e){
//             $e->getMessage();
//         }
//     }
// }
