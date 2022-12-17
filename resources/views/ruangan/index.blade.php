@extends('layouts.main')
@section('container')


<div class="overflow-x-auto overflow-y-auto">
    <table class="table w-full">
        <tr>
          <th>NO</th>
          <th>Nama Ruangan</th>
          <th>Penanggung Jawab</th>
          <th>Ket</th>

          {{-- <th>Password</th> --}}

        </tr>
        <?php $no=1;?>
        @foreach($data as $key)
        <tr>
          <th>{{ $no++ }}</th>
          <td>{{ $key->nama_ruangan }}</td>
          <td>{{ $key->penanggung_jawab }}</td>
          <td>{{ $key->ket }}</td>
          <td>
              <a href="ruangan/edit/{{$key->id_ruangan}}"><button class="btn btn-sm btn-outline btn-info">EDIT</button></a>
              <a href="ruangan/hapus/{{$key->id_ruangan}}"><button class="btn btn-sm btn-outline btn-warning">HAPUS</button></a>
          </td>
          {{-- <td>{{ $key->password }}</td> --}}

        </tr>
        @endforeach

    </table>
</div>

  <a href="/ruangan/tambah"><button type="submit" class="btn btn-success mt-10">Tambah ruangan</button></a>



@endsection
