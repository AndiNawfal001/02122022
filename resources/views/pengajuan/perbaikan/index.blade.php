@extends('layouts.main')
@section('container')

<div class="alert shadow-lg my-5">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <span>Sebelum tambah pengajuan perbaikan baru, harap pastikan dahulu sudah ada barangnya</span>
  </div>
</div>
<div class="overflow-x-auto overflow-y-auto">
  
    <table class="table w-full ">
      <tr>
        <th></th>
        <th>Nama Barang</th>
        <th>Spesifikasi</th>
        <th>Tanggal</th>
        <th>Aksi</th>

        {{-- <th>Password</th> --}}

      </tr>
      <?php $no=1;?>
      @foreach($data as $key)
      <tr>
        <th>{{ $no++ }}</th>
        <td>{{ $key->nama_barang }}</td>
        <td>{{ $key->spesifikasi }}</td>
        <td>{{ $key->tgl }}</td>
        <td> 
            <a href="PB/hapus/{{$key->id_pengajuan_pb}}"><button class="btn btn-sm btn-outline btn-warning">HAPUS</button></a>
        </td>
        {{-- <td>{{ $key->password }}</td> --}}

      </tr>
      @endforeach

    </table>
  </div>

  <a href="/pengajuan/PB/tambah"><button type="submit" class="btn btn-success mt-10">Tambah Pengajuan </button></a>



@endsection
