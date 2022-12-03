@extends('layouts.main')
@section('container')
<div class="p-5">
 <div class="shadow-md rounded-md mx-auto  bg-base-100 p-5">
 <form action="update" method="POST">
 @csrf
    <h2 class="text-2xl font-bold">Form Edit Admin</h2>
    <br>
    <div class="form-control">
        <label class="label">
        <span class="label-text">Username</span>
        </label>
        <input type="number" name="username" class="input input-bordered"
        value="{{ old('username', $adminpengguna->username) }}"/>
        <input type="hidden"  name="id_pengguna" value="{{$adminpengguna->id_pengguna}}" />
    </div>
    <div class="form-control">
        <label class="label">
            <span class="label-text">Email</span>
        </label>
        <input type="text" name="email" class="input input-bordered"
        value="{{ old('email', $adminpengguna->email) }}"/>
    </div>
    <div class="form-control">
        <label class="label">
            <span class="label-text">Email</span>
        </label>
        <input type="text" name="email" class="input input-bordered"
        value="{{ old('email', $adminpengguna->email) }}"/>
    </div>
    <div class="form-control">
        <label class="label">
            <span class="label-text">Nama</span>
        </label>
        <input type="text" name="nama" class="input input-bordered"
        value="{{ old('nama', $adminpengguna->nama) }}"/>
        <input type="hidden"  name="hashing_password" value="{{$adminpengguna->password}}" />
        <input type="hidden"  name="current_nama" value="{{$adminpengguna->nama}}" />
    </div>
    <div class="form-control">
        <label class="label">
            <span class="label-text">Kontak</span>
        </label>
        <input type="text" name="kontak" class="input input-bordered"
        value="{{ old('kontak', $adminpengguna->kontak) }}"/>
    </div>
        <div class="form-control mt-6">
          <button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>

</div>
@endsection
