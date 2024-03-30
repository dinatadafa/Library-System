@extends('layout')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Pegembalian</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pengembalian</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center">NIK</th>
                                <th scope="col" class="text-center">Buku</th>
                                <th scope="col" class="text-center">Tanggal Peminjaman</th>
                                <th scope="col" class="text-center">Sisa Waktu</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lends as $lend)
                            @php
                            $twoWeeksAgo = now()->subWeeks(2);
                            $tglPinjam = \Carbon\Carbon::parse($lend->tgl_pinjam);
                            $tglPengembalian = $tglPinjam->copy()->addDays(14);
                            $sisa_waktu = $tglPengembalian->diffInDays(now());
                            if(now() > $tglPengembalian){
                            $sisa_waktu = "Overdue ". $tglPengembalian->diffInDays(now()) . " Hari";
                            }
                            @endphp
                            @if($lend->transaction->tgl_kembali == null)
                            <tr>
                                <td class="text-center align-middle">{{ $lend->anggota->nama }}</td>
                                <td class="text-center align-middle">{{$lend->anggota->noktp}}</td>
                                <td class="text-center align-middle">{{$lend->transaction->book->judul}}</td>
                                <td class="text-center align-middle">{{ \Carbon\Carbon::parse($lend->tgl_pinjam)->format('d-F-Y') }}</td>
                                @if(now() > $tglPengembalian)
                                <td class="text-center align-middle"><span class="label gradient-2 btn-rounded">{{ $sisa_waktu }}</span>
                                </td>
                                @else
                                <td class="text-center align-middle"><span class="label gradient-1 btn-rounded">{{ $sisa_waktu }}</span>
                                </td>
                                @endif
                                <td class="text-center align-middle">
                                    <div class="bootstrap-modal">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn mb-1 btn-info" data-toggle="modal" data-target="#exampleModalCenter">Konfirmasi</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Konfirmasi Pengembalian</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h1>Apakah buku sudah dikembalikan?</h1>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <form method="POST" action="/dashboard/return/{{$lend->idtransaksi}}">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
@endsection