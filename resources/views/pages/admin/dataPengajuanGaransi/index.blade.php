@extends('layouts.admin')

@section('content')

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
              <form action="/admin/data-pengajuan-garansi/{{ $complain->id }}" method="post">
                @method('put')
                @csrf
                <select class="form-select" action="/admin/data-pengajuan-garansi/{{ $complain->id }}" method="post">
                  @if ($complain->status == 'Diterima')
                    <option selected name="status">{{ $complain->status }}</option>
                    <option value="1" name="status">{{ $complain->status = 'Diproses' }}</option>
                    <option value="2" name="status">{{ $complain->status = 'Selesai' }}</option>
                  @elseif ($complain->status == 'Diproses')
                    <option selected name="status">{{ $complain->status }}</option>
                    <option value="1" name="status">{{ $complain->status = 'Diterima' }}</option>
                    <option value="2" name="status">{{ $complain->status = 'Selesai' }}</option>
                  @elseif ($complain->status == 'Selesai')
                    <option selected name="status">{{ $complain->status }}</option>
                    <option value="1" name="status">{{ $complain->status = 'Diterima' }}</option>
                    <option value="2" name="status">{{ $complain->status = 'Diproses' }}</option>
                  @endif
                </select>
              </form>
            </td>
            <td>{{ $complain->id_barang }}</td>
            <td>{{ $complain->id_pembeli }}</td>
            <td>{{ $complain->foto }}</td>
            <td><a href="/admin/data-riwayat-tindakan">Lihat</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection