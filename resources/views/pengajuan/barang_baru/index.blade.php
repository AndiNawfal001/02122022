@extends('layouts.main')
@section('container')


<div class="overflow-x-auto overflow-y-auto">
    <table class="table w-full ">
      <tr>
        <th></th>
        <th>Nama Barang</th>
        <th>Total Harga</th>
        <th>Tanggal</th>
        <th>Aksi</th>

        {{-- <th>Password</th> --}}

      </tr>
      <?php $no=1;?>
      @foreach($data as $key)
      <tr>
        <th>{{ $no++ }}</th>
        <td>{{ $key->nama_barang }}</td>
        <td>{{ $key->total_harga }}</td>
        <td>{{ $key->tgl }}</td>
        <td>
            <a href="BB/edit/{{$key->id_pengajuan_bb}}"><button class="btn btn-sm btn-outline btn-info">EDIT</button></a>
            <a href="BB/hapus/{{$key->id_pengajuan_bb}}"><button class="btn btn-sm btn-outline btn-warning">HAPUS</button></a>
        </td>
        {{-- <td>{{ $key->password }}</td> --}}

      </tr>
      @endforeach

    </table>
  </div>

  <a href="/pengajuan/BB/tambah"><button type="submit" class="btn btn-success mt-10">Tambah Pengajuan </button></a>



@endsection
