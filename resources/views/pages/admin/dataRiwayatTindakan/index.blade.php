@extends('layouts.admin')

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-10 mt-3 mx-auto" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<h3>Riwayat Tindakan</h3>
<div class="table-responsive col-lg-11 mt-5">
  <div class="mt-2 mb-4">
    <a class="btn btn-primary" href="/admin/data-pengajuan-garansi/{{ $komplain_id }}}/data-riwayat-tindakan/create">
        <i class="fas fa-plus">&ensp;Tambah Data</i>
    </a>
  </div>
    <table class="table table-striped table-dark table-bordered text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tanggal Tindakan</th>
          <th scope="col">Tindakan</th>
          <th scope="col">ID Komplain</th>
          <th scope="col">ID Petugas</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-hover">
        @foreach ($historis as $histori)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $histori->tanggal_tindakan }}</td>
            <td>{{ $histori->tindakan }}</td>
            <td>{{ $histori->id_komplain }}</td>
            <td>{{ $histori->id_petugas }}</td>
            <td>
                <form action="{{ route('data-pengajuan-garansi.data-riwayat-tindakan.destroy', [$histori->id_komplain, $histori->id]) }}" method="post" class="d-inline">
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