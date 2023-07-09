@extends('layouts.administrator')
@section('container')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Merk /</span> Merk
    </h4>

    <!-- Responsive Table -->
    <div class="card">
        <h5 class="card-header">Merk</h5>
        <div class="table-responsive text-nowrap">
            <form action="{{ route('administrator.merk.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Merk:</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>Id</th>
                        <th>Nama Merk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($merks as $merk)
                    <tr>
                        <th scope="row">{{ $merk->id }}</th>
                        <td>{{ $merk->id_merk }}</td>
                        <td>{{ $merk->nama }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>

@endsection