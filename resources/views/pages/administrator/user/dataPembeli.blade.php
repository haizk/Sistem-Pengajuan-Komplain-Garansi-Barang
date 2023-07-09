@extends('layouts.administrator')

@section('content')
<div class="page-heading" style="margin-bottom: 20px;">
    <h3 style="margin-bottom: 15px;">Data Pembeli</h3>
    <div style="display: flex; justify-content: flex-end;">
        <a href="addpembeli" class="btn icon icon-left btn-primary">+ Tambah pembeli</a>
    </div>
</div>
<!-- Basic Tables start -->
<div class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>NO TELP</th>
                                        <th style="text-align:center">AKSI</th>
                                    </tr>
                                </thead>
                                </tr>
                                <tbody>
                                    @foreach ($pembeli as $key => $row)
                                    <tr>
                                        <td class="text-bold-500">{{ $pembeli->firstItem() + $key }}</td>
                                        <td class="text-bold-500">{{ $row->name }}</td>
                                        <td class="text-bold-500">{{ $row->email }}</td>
                                        <td>{{ $row->notelp }}</td>
                                        <td>
                                            <div style="display: flex; align-items:center; gap: 5px">
                                                <a href="editpembeli{{ $row -> id }}" class="btn btn-sm icon btn-primary"><i
                                                        class="bi bi-pencil"></i></a>
                                                <a href="deletepembeli{{ $row -> id }}" class="btn btn-sm icon btn-danger"><i
                                                        class="bi bi-x"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-2">
        Showing {{ $pembeli->firstItem() }} of {{ $pembeli->total() }}
    </div>
    {{ $pembeli->links() }}
</div>

@endsection