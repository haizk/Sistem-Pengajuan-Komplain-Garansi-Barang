@extends('layouts.administrator')

<<<<<<< HEAD
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Barang /</span> Barang
    </h4>

    <!-- Responsive Table -->
    <div class="card">
        <h5 class="card-header">List Barang</h5>
        <div class="table-responsive text-nowrap">
            <form action="{{ route('administrator.barang.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Merk:</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                    <label for="harga">Harga:</label>
                    <input type="number" name="harga" id="harga" class="form-control">
                    <label for="largeSelect" class="form-label">Merk</label>
                            <select class="form-select form-select-lg" name="id_merk" id= "id_merk">
                                @foreach ($merkList as $id => $nama)
                                <option value="{{ $id }}">{{ $nama }}</option>
                            @endforeach
                        </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Merk</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <th scope="row">{{ $barang->id }}</th>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td>{{ $barang->merk->nama }}</td>
                        <td>
                            <div class="demo-inline-spacing">
                                <form action="{{ route('administrator.barang.update', $barang->id) }}" method="POST" id="formEdit" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Edit</button>
                                    <!-- Create Modal -->
                                    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Edit Barang</h5>
                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                                ></button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">Nama</label>
                                                    <input type="text" id="nameBasic" class="form-control" name="nama" placeholder="Mouse wireless" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">Harga</label>
                                                    <input type="text" id="nameBasic" class="form-control" name="harga" placeholder="150000" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="nameBasic" class="form-label">Merk</label>
                                                        <select class="form-select form-select-lg" name="id_merk" id= "id_merk">
                                                            @foreach ($merkList as $id => $nama)
                                                            <option value="{{ $id }}">{{ $nama }}</option>
                                                        @endforeach
                                                        </select>
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" id="editSubmit" class="d-none">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="submitEdit()">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end Create Modal -->
                        </div>
                        </td>
                        <td>
                            <form action="{{ route('administrator.barang.destroy', $barang->id) }}" method="POST"> 
                                @method('DELETE')
                                @csrf
                                <div class="demo-inline-spacing">
                                <button type="submit" class="btn btn-danger">Hapus</button>   
                                </div> 
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
@section('script')
<script>
    function submitCreate(){
        $('#createSubmit').click();
    }

    

    function submitEdit(){
        $('#editSubmit').click();
    }

    function submitDelete(){
        $('#deleteSubmit').click();
    }

    function submitForm(){
        document.getElementById("formEdit").submit();
    }
</script>
=======
@section('content')
<div class="page-heading" style="margin-bottom: 20px; display: flex; align-items: center;">
    <h3 style="margin-bottom: 15px;">Data Barang</h3>
    <a href="#" class="btn icon icon-left btn-success btn-sm" style="margin-left: auto;"><i data-feather="plus"></i>
        Tambah Data Barang</a>
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
                                        <th>MERK</th>
                                        <th>HARGA</th>
                                        <th style="text-align:center">AKSI</th>
                                    </tr>
                                </thead>
                                </tr>
                                <tbody>
                                    @foreach ($barang as $key => $row)
                                    <tr>
                                        <td class="text-bold-500">{{ $row->id }}</td>
                                        <td class="text-bold-500">{{ $row->nama }}</td>
                                        <td class="text-bold-500">{{ $row->id_merk }}</td>
                                        <td class="text-bold-500">{{ $row->harga }}</td>
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
        Showing {{ $barang->firstItem() }} of {{ $barang->total() }}
    </div>
    {{ $barang->links() }}
</div>
>>>>>>> 378279bf6e3113f003c7a54701f5f2c5600a7f3f
@endsection