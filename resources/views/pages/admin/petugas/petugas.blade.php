@extends('layouts.pembeli')
@section('container')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4" style="margin-bottom: 20px; display: flex; justify-content: space-between;">
        <span>Petugas</span>
        <a href="addPetugas" class="btn btn-primary">Tambah Petugas</a>
    </h4>
    <!-- Responsive Table -->
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>ID</th>
                        <th>Nama</th>
                        <th style="text-align:center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($petugas as $petugas)
                    <tr>
                        <th scope="row">{{ $petugas->id }}</th>
                        <td>{{ $petugas->nama }}</td>
                        <td>
                        <td>
                            <a class="btn btn-warning" href="editPetugas{{ $petugas->id }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="deletePetugas{{ $petugas->id }}"
                                class="d-inline">
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                        class="bi bi-trash-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>

@endsection