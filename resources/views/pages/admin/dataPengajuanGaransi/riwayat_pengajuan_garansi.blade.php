@extends('admin.dashboard.layouts.main')

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
        @foreach ($riwayat_pengajuan_garansi as $pengajuan_garansi)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pengajuan_garansi->pengajuan }}</td>
            <td>{{ $pengajuan_garansi->tanggal_pengajuan }}</td>
            <td>{{ $pengajuan_garansi->tanggal_selesai }}</td>
            <td>{{ $pengajuan_garansi->status }}</td>
            <td>{{ $pengajuan_garansi->id_admin }}</td>
            <td>{{ $pengajuan_garansi->id_pembeli }}</td>
            <td>{{ $pengajuan_garansi->id_barang }}</td>
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