@extends('layouts.admin')

@section('content')

<h3>Riwayat Tindakan</h3>
<div class="table-responsive col-lg-10">
    <table class="table table-striped table-dark table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Laporan</th>
          <th scope="col">Tanggal Tindakan</th>
          <th scope="col">Tindakan</th>
          <th scope="col">Petugas</th>
          <th scope="col">ID Pengajuan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-hover">
        @foreach ($riwayat_tindakan as $tindakan)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tindakan->laporan }}</td>
            <td>{{ $tindakan->tanggal_tindakan }}</td>
            <td>{{ $tindakan->tindakan }}</td>
            <td>{{ $tindakan->id_petugas }}</td>
            <td>{{ $tindakan->id_pengajuan }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection