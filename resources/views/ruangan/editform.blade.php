@extends('layouts.main')
@section('container')
<div class="p-5">
 <div class="shadow-md rounded-md mx-auto  bg-base-100 p-5">
 <form action="editsimpan" method="POST">
 @csrf
    <h2 class="text-2xl font-bold">Form Edit Barang</h2>
    <br>
    <div class="form-control">
        <label class="label">
        <span class="label-text">Nama Supplier</span>
        </label>
        <input type="text" name="nama_ruangan" class="input input-bordered"
        value="{{ old('nama', $edit->nama_ruangan) }}"/>
        <input type="hidden"  name="id_ruangan" value="{{$edit->id_ruangan}}" />
    </div>
    <div class="form-control">
        <label class="label">
        <span class="label-text">penanggung_jawab</span>
        </label>
        <input type="text" name="penanggung_jawab" class="input input-bordered"
        value="{{ old('penanggung_jawab', $edit->penanggung_jawab) }}"/>
    </div>
    <div class="form-control">
        <label class="label">
            <span class="label-text">ket</span>
        </label>
        <input type="text" name="ket" class="input input-bordered"
        value="{{ old('ket', $edit->ket) }}"/>
    </div>
        <div class="form-control mt-6">
          <button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>

</div>
@endsection
