@extends('layout')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Book Details</a></li>
        </ol>
    </div>
</div>
<!-- row -->
<div class="row">
    <div class="col-md-6 col-lg-20">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$book->judul}}</h5>
                <p class="card-text">ISBN: {{$book->isbn}}</p>
                <p class="card-text">Kategori: {{$book->kategori->nama}}</p>
                <p class="card-text">Pengarang: {{$book->pengarang}}</p>
                <p class="card-text">Penerbit: {{$book->penerbit}}</p>
                <p class="card-text">Kota Terbit: {{$book->kota_terbit}}</p>
                <p class="card-text">Editor: {{$book->editor}}</p>
                <p class="card-text">Stok: {{$book->stok}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="bootstrap-modal">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Edit <span class="btn-icon-right"><i class="fa fa-pencil-square-o"></i></span></button>
            <!-- Modal -->
            <div class="modal fade" id="basicModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Buku</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/dashboard/details/{{ $book->idbuku }}/edit">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <input type="text" class="form-control input-default" id="isbn" name="isbn" placeholder="ISBN" value="{{ $book->isbn }}">
                                </div>
                                @error('isbn')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" class="form-control input-default" id="judul" name="judul" placeholder="Judul" value="{{ $book->judul }}"
                                </div>
                                @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Pilih Kategori (select one):</label>
                                    <select class="form-control" id="idkategori" name="idkategori">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->idkategori }}" {{ old('kategori') == $book -> kategori -> nama ? 'selected' : '' }}>
                                            {{ $category->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('kategori')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" class="form-control input-default" id="pengarang" name="pengarang" placeholder="Pengarang" value="{{ $book->pengarang }}">
                                </div>
                                @error('pengarang')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" class="form-control input-default" id="penerbit" name="penerbit" placeholder="Penerbit" value="{{ $book->penerbit }}">
                                </div>
                                @error('penerbit')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" class="form-control input-default" id="kota_terbit" name="kota_terbit" placeholder="Kota Terbit" value="{{ $book->kota_terbit }}">
                                </div>
                                @error('kota_terbit')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" class="form-control input-default" id="editor" name="editor" placeholder="Editor" value="{{ $book->editor }}">
                                </div>
                                @error('editor')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <a href="/dashboard/details/{idbuku}" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                @include('sweetalert::alert')

                            </form>

                        </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bootstrap-modal">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#basicModal2">Hapus Buku <span class="btn-icon-right"><i class="fa fa-close"></i></span></button>
            <!-- Modal -->
            <div class="modal fade" id="basicModal2">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Konfirmasi Penghapusan Buku</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">Apakah anda ingin menghapus buku ini?</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form method="post" action="/dashboard/details/{{ $book->idbuku }}/delete">
                                @csrf
                                @method('post')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="/dashboard" type="button" class="btn mb-1 btn-secondary">Cancel <span class="btn-icon-right"><i class="fa fa-envelope"></i></span>
        </a>
    </div>
</div>

<div class="container-fluid">

</div>
<!-- #/ container -->
@endsection