@extends('layout')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Peminjaman</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Masukkan Data Peminjaman</h4>
                    <div class="basic-form">
                        <form method="post" action="/dashboard/lend/add">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label>Nama:</label>
                                <select class="form-control" id="nama" name="nama">
                                    @foreach($members as $member)
                                    <option value="{{ $member->noktp }}" {{ old('noktp') == $member->noktp ? 'selected' : '' }}>
                                        {{ $member->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Buku:</label>
                                <select class="form-control" id="judul" name="judul">
                                    @foreach($books as $book)
                                    <option value="{{ $book->idbuku }}" {{ old('idbuku') == $book->idbuku ? 'selected' : '' }}>
                                        {{ $book->judul }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Petugas:</label>
                                <select class="form-control" id="petugas" name="petugas">
                                    @foreach($admins as $admin)
                                    <option value="{{ $admin->idpetugas }}" {{ old('idpetugas') == $admin->idpetugas ? 'selected' : '' }}>
                                        {{ $admin->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('judul')
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