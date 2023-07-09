@extends('layouts.administrator')

@section('content')
<div class="page-heading" style="margin-bottom: 20px; display: flex; align-items: center;">
    <h3 style="margin-bottom: 15px;">Data Merk</h3>
    <a href="#" class="btn icon icon-left btn-success btn-sm" style="margin-left: auto;"><i data-feather="plus"></i>
        Tambah Data Merk</a>
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
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th style="text-align:center">AKSI</th>
                                    </tr>
                                </thead>
                                </tr>
                                <tbody>
                                    @foreach ($merks as $key => $row)
                                    <tr>
                                        <td class="text-bold-500">{{ $row->id }}</td>
                                        <td class="text-bold-500">{{ $row->nama }}</td>
                                        <td>
                                            <div
                                                style="display: flex; align-items: center; justify-content: center; gap: 5px">
                                                <a href="editpembeli{{ $row->id }}"
                                                    class="btn btn-sm icon btn-primary"><i class="bi bi-pencil"></i></a>
                                                <a href="deletepembeli{{ $row->id }}"
                                                    class="btn btn-sm icon btn-danger"><i class="bi bi-x"></i></a>
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
        Showing {{ $merks->firstItem() }} of {{ $merks->total() }}
    </div>
    {{ $merks->links() }}
</div>
@endsection