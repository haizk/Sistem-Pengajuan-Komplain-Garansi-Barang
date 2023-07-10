@extends('layouts.admin')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Riwayat Tindakan /</span> Tindakan
    </h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('data-pengajuan-garansi.data-riwayat-tindakan.store', $id_komplain) }}" method="POST">
                        @csrf
                        <div class="mt-2 mb-3">
                            <label for="text" class="form-label">Komplain</label>
                            <input class="form-control" name="id_komplain" id="id_komplain" />
                        </div>
                        <div class="mt-2 mb-3">
                            <label for="text" class="form-label">Tindakan</label>
                            <input class="form-control" name="tindakan" id="tindakan" />
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Tindakan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="2021-06-18" id="tanggal_tindakan"
                                    name="tanggal_tindakan" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">ID Petugas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_petugas"
                                    name="id_petugas" />
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-auto">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Basic with Icons -->
    </div>
</div>

@endsection