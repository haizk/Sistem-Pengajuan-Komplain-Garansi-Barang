@extends('layouts.admin')

@section('content')

<h3>Riwayat Tindakan</h3>
<div class="table-responsive col-lg-10">
    <table class="table table-striped table-dark table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tindakan</th>
          <th scope="col">Tanggal Tindakan</th>
          <th scope="col">ID Komplain</th>
          <th scope="col">ID Petugas</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-hover">
        @foreach ($historis as $histori)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $histori->tindakan }}</td>
            <td>{{ $histori->tanggal_tindakan }}</td>
            <td>{{ $histori->id_komplain }}</td>
            <td>{{ $histori->id_petugas }}</td>
            <td>
              <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
              <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection