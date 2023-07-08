@extends('layouts.pembeli')
@section('container')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Status Pengajuan /</span> Status Pengajuan
    </h4>

    <!-- Responsive Table -->
    <div class="card">
        <h5 class="card-header">status Ajuan Garansi</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>No</th>
                        <th>Tanggal Pembelian</th>
                        <th>Jenis Barang</th>
                        <th>Merk</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Bukti Struk</th>
                        <th>Batas Garansi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <th scope="row">{{ $barang->id }}</th>
                        <td>{{ $barang->tanggal_pembelian }}</td>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->merk }}</td>
                        <td>{{ $barang->jumlah }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td><img src="{{ asset('storage/foto_barang/'. $barang->foto) }}" width="100"></td>
                        <td>{{ $barang->batas_garansi }}</td>
                        <td>Table cell</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>

@endsection