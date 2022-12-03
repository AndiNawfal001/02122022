@extends('layouts.main')
@section('container')
<div class="p-5">

 <div class="shadow-md rounded-md mx-auto  bg-base-100 p-5">
 <form action="simpan" method="POST">
 @csrf
    <h2 class="text-2xl font-bold">Form Tambah Pengajuan</h2>
    <br>

    <div class="lg:flex flex-row gap-5">
        <div class="basis-1/2">
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Nama Manajemen</span>
                </label>
                <select class="select select-bordered w-full max-w-xs" name="manajemen" required>
                    <option disabled selected>-- Pilih Manajemen --</option>
                    @foreach ($manajemen as $item)
                        <option value="{{ $item->nama }} ">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Kaprog</span>
                </label>
                <select class="select select-bordered w-full max-w-xs" name="kaprog" required>
                    <option disabled selected>-- Pilih Nama Anda(Kaprog) --</option>
                    @foreach ($kaprog as $item)
                        <option value="{{ $item->nama }} ">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-control">
                <label class="label">
                <span class="label-text">Nama Barang</span>
                </label>
                <input type="text" name="nama_barang" class="input input-bordered" required/>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Spesifikasi</span>
                </label>
                <input type="text" name="spesifikasi" class="input input-bordered" required/>
            </div>
        </div>

        <div class="basis-1/2">
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Harga Satuan</span>
                </label>
                <input type="text" name="harga_satuan" class="input input-bordered" required/>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Total Harga</span>
                </label>
                <input type="text" name="total_harga" class="input input-bordered" required/>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Jumlah Barang</span>
                </label>
                <input type="number" name="jumlah" class="input input-bordered" required/>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Untuk Ruangan..</span>
                </label>
                <input type="text" name="ruangan" class="input input-bordered" required/>
            </div>
        </div>
    </div>


        <div class="form-control mt-6">
          <button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>

</div>
@endsection
