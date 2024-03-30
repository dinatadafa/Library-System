@extends('layout')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Buku</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Masukkan Data Buku</h4>
                    <div class="basic-form">
                        <form method="post" action="/dashboard/create/store" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="isbn" name="isbn" placeholder="ISBN">
                            </div>
                            @error('isbn')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="judul" name="judul" placeholder="Judul">
                            </div>
                            @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Pilih Kategori (select one):</label>
                                <select class="form-control" id="idkategori" name="idkategori">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->idkategori }}" {{ old('idkategori') == $category->idkategori ? 'selected' : '' }}>
                                        {{ $category->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('idkategori')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="pengarang" name="pengarang" placeholder="Pengarang">
                            </div>
                            @error('pengarang')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="penerbit" name="penerbit" placeholder="Penerbit">
                            </div>
                            @error('penerbit')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="kota_terbit" name="kota_terbit" placeholder="Kota Terbit">
                            </div>
                            @error('kota_terbit')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="editor" name="editor" placeholder="Editor">
                            </div>
                            @error('editor')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control input-default" id="stok" name="stok" placeholder="Stok">
                            </div>
                            @error('stok')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="file" name="file">
                            </div>
                            @error('file')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn mb-1 btn-primary btn-lg">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
@endsection