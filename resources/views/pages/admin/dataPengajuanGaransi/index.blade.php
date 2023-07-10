@extends('layouts.admin')

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-10 mt-3 mx-auto" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h3>Riwayat Pengajuan Garansi</h3>
<div class="table-responsive col-lg-11 mt-5">
    <table class="table table-striped table-dark table-bordered text-center">
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
          <th scope="col">Riwayat Tindakan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-hover">
        @foreach ($complains as $complain)
            <tr>
            <td>{{ $loop->iteration }}</td>
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
            </td>
            <td>{{ $complain->id_barang }}</td>
            <td>{{ $complain->id_pembeli }}</td>
            <td>{{ $complain->foto }}</td>
            <td><a href="{{ route('data-pengajuan-garansi.data-riwayat-tindakan.index', $complain->id) }}">Lihat</a></td>
            <td>
                <a class="btn btn-warning" href="{{ route('data-pengajuan-garansi.edit', $complain->id) }}">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('data-pengajuan-garansi.destroy', $complain->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection