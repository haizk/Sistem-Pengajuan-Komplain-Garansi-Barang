@extends('layouts.administrator')
@section('container')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Barang /</span> Barang
    </h4>

    <!-- Responsive Table -->
    <div class="card">
        <h5 class="card-header">List Barang</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>Id</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Merk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <th scope="row">{{ $barang->id }}</th>
                        <td>{{ $barang->id_barang }}</td>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td>{{ $complain->merk->nama }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>

@endsection