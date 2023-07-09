@extends('layouts.admin')

@section('content')

<h3>Riwayat Pengajuan Garansi</h3>
<div class="table-responsive col-lg-12">
    <table class="table table-striped table-dark table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">No.Seri</th>
          <th scope="col">Jenis</th>
          <th scope="col">Harga</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Merk</th>
          <th scope="col">Tanggal Pembelian</th>
          <th scope="col">Batas Garansi</th>
          <th scope="col">ID Pembeli</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-hover">
        @foreach ($barangs as $barang)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->no_seri }}</td>
            <td>{{ $barang->jenis }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->jumlah }}</td>
            <td>{{ $barang->merk }}</td>
            <td>{{ $barang->tanggal_pembelian }}</td>
            <td>{{ $barang->batas_garansi }}</td>
            <td>{{ $barang->id_pembeli }}</td>
            <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Hapus</button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection