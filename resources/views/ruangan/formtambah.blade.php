@extends('layouts.main')
@section('container')
<div class="p-5">

 <div class="shadow-md rounded-md mx-auto  bg-base-100 p-5">
 <form action="simpan" method="POST">
 @csrf
    <h2 class="text-2xl font-bold">Form Tambah Ruangan</h2>
    <br>
    <div class="form-control">
        <label class="label">
        <span class="label-text">Nama Ruangan</span>
        </label>
        <input type="text" name="nama_ruangan" class="input input-bordered" required/>
    </div>
    <div class="form-control">
        <label class="label">
        <span class="label-text">Penanggung jawab</span>
        </label>
        <input type="text" name="penanggung_jawab" class="input input-bordered" required/>
    </div>
    <div class="form-control">
        <label class="label">
            <span class="label-text">Keterangan</span>
        </label>
        <input type="text" name="ket" class="input input-bordered" required/>
    </div>
        <div class="form-control mt-6">
          <button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>

</div>
@endsection
