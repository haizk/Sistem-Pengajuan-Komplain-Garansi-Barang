@extends('layouts.admin')

@section('content')

<h3>Riwayat Pengajuan Garansi</h3>
<div class="table-responsive col-lg-11 mt-5">
    <table class="table table-striped table-dark table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tanggal Pembelian</th>
          <th scope="col">Batas Garansi</th>
          <th scope="col">Keluhan</th>
          <th scope="col">Status</th>
          <th scope="col">ID Barang</th>
          <th scope="col">ID Pembeli</th>
          <th scope="col">Foto</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-hover">
        @foreach ($complains as $complain)
            <tr>
            <td>{{ $complain->id }}</td>
            <td>{{ $complain->tanggal_pembelian }}</td>
            <td>{{ $complain->batas_garansi }}</td>
            <td>{{ $complain->keluhan }}</td>
            <td>
              <div>
                @if ($complain->status == 'Selesai')
                  <span class="badge bg-success">Selesai</span>
                @elseif ($complain->status == 'Diproses')
                  <span class="badge bg-warning">Diproses</span>
                @elseif ($complain->status == 'Diterima')
                  <span class="badge bg-secondary">Diterima</span>
                @endif
              </div>
              <a href="/admin/data-riwayat-tindakan">Riwayat Tindakan</a>
            </td>
            <td>{{ $complain->id_barang }}</td>
            <td>{{ $complain->id_pembeli }}</td>
            <td>{{ $complain->foto }}</td>
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