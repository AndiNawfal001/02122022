<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{

    public function index(){
        $adminPengguna = DB::table('admin')
            ->join('pengguna', 'pengguna.id_pengguna', '=', 'admin.id_pengguna')
            ->select('admin.*', 'pengguna.*')
            ->get();
        
        // dd($adminPengguna);
        // $data = DB::select('SELECT * FROM admin');

        return view('pengguna.admin.index', compact('adminPengguna'));
    }

    public function getAdminPengguna(){
        $adminpengguna = DB::table('admin')
            ->join('pengguna', 'pengguna.id_pengguna', '=', 'admin.id_pengguna')
            ->select('admin.*', 'pengguna.*')
            ->get();
        // dd($adminpengguna);

        return view('pengguna.admin.editform', compact('adminpengguna'));

    }

    // private function getCurrentNama(){
    //     return collect(DB::select('SELECT * FROM '));
    // }

    public function formtambah() {


        return view('pengguna.admin.tambahform');
    }

    public function simpan(Request $request)
    {
        try {

        $tambahadmin = DB::insert("CALL tambah_admin(:username, :email, :hashing_password, :nama, :kontak )", [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'hashing_password' => Hash::make($request->input('hashing_password')),
            'nama' => $request->input('nama'),
            'kontak' => $request->input('kontak'),


            //dd($request->all())
        ]);

        if ($tambahadmin)
            return redirect('User/admin');
        else
            return "input data gagal";
        } catch (\Exception $e) {
        return  $e->getMessage();
        }
    }

    public function edit($id = null)
    {

        $edit = $this->getAdminPengguna($id);

        return view('pengguna.admin.editform', compact('edit'));
    }

    public function update(Request $request)
    {
        try {

        $editadmin = DB::update("CALL update_admin(:id_pengguna, :username, :email, :hashing_password, :current_nama, :nama, :kontak )", [
            'id_pengguna' => $request->input('id_pengguna'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'hashing_password' => Hash::make($request->input('hashing_password')),
            'current_nama' => $request->input('current_nama'),
            'nama' => $request->input('nama'),
            'kontak' => $request->input('kontak'),


            //dd($request->all())
        ]);

        if ($editadmin)
            return redirect('User/admin');
        else
            return "input data gagal";
        } catch (\Exception $e) {
        return  $e->getMessage();
        }
    }
}
