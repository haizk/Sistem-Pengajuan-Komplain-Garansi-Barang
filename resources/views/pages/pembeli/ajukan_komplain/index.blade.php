@extends('layouts.pembeli')

@section('container')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Ajukan Komplain/</span> Ajukan Komplain
    </h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('pembeli.ajukan_komplain.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Pembelian</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="2021-06-18" id="tanggal_pembelian" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" placeholder="Mouse Wireless" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Merk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="merk" placeholder="Logitech" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="jumlah" placeholder="2" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Harga Satuan</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="harga" placeholder="150000"/>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Bukti Struk</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="foto" aria-describedby="inputGroupFileAddon04" aria-label="Upload" />
                                    <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Upload</button>
                                </div>
                            </div>
                        </div>
                    -->
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Send</button>
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