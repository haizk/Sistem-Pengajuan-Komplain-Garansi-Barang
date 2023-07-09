@extends('layouts.admin')

@section('content')

<h3>Riwayat Tindakan</h3>
<div class="table-responsive col-lg-10">
    <table class="table table-striped table-dark table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Pengajuan</th>
          <th scope="col">Tanggal Pengajuan</th>
          <th scope="col">Tanggal Selesai</th>
          <th scope="col">Status</th>
          <th scope="col">ID Admin</th>
          <th scope="col">ID Pembeli</th>
          <th scope="col">ID Barang</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-hover">
        @foreach ($complains as $complain)
            <tr>
            <td>{{ $complain->id }}</td>
            <td>{{ $complain->pengajuan }}</td>
            <td>{{ $complain->tanggal_pengajuan }}</td>
            <td>{{ $complain->tanggal_selesai }}</td>
            <td>{{ $complain->status }}</td>
            <td>{{ $complain->id_admin }}</td>
            <td>{{ $complain->id_pembeli }}</td>
            <td>{{ $complain->id_barang }}</td>
            <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Edit</button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection