@extends('layouts.admin')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        Edit Status Pengajuan
    </h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('data-pengajuan-garansi.update', $complain->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tanggal_pembelian">Tanggal Pembelian</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="{{ $complain->tanggal_pembelian }}" id="tanggal_pembelian" name="tanggal_pembelian" disabled/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="batas_garansi">Batas Garansi</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="{{ $complain->batas_garansi }}" id="batas_garansi" name="batas_garansi" disabled/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="keluhan">Keluhan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $complain->keluhan }}" id="keluhan" placeholder="keluhan" name="keluhan" disabled/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="status">Status</label>
                            <div class="form-group">
                                <select class="form-select">
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
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_barang">ID Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $complain->id_barang }}" id="id_barang" placeholder="id_barang" name="id_barang" disabled/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_pembeli">ID Pembeli</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $complain->id_pembeli }}" id="id_pembeli" placeholder="id_pembeli" name="id_pembeli" disabled/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Bukti Struk</label>
                            <div class="col-sm-6">
                                <input type="hidden" name="oldSTruk" id="oldSTruk" value="{{ $complain->foto }}">
                                @if ($complain->foto)
                                    <img src="{{ asset('storage/' . $complain->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else    
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                @endif
                            </div>  
                        </div>
                    
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Basic with Icons -->
    </div>
</div>

<script>
    function previewImage() {
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection