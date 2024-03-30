@extends('layout')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">History</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Riwayat Transaksi</h4>
                <ul class="nav nav-pills mb-3">
                    <li class="nav-item"><a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Selesai</a>
                    </li>
                    <li class="nav-item"><a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Progress</a>
                    </li>
                    <li class="nav-item"><a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Overdue</a>
                    </li>
                </ul>
                <div class="tab-content br-n pn">
                    <div id="navpills-1" class="tab-pane active">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-md-8 col-xl-10">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>Buku</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Tanggal Pengembalian</th>
                                                <th>Denda</th>
                                                <th>Petugas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lends as $lend)
                                            @if ($lend->transaction->tgl_kembali !== null)
                                            <tr>
                                                <td>{{$lend->anggota->nama}}</td>
                                                <td>{{$lend->anggota->noktp}}</td>
                                                <td>{{$lend->transaction->book->judul}}</td>
                                                <td>{{ \Carbon\Carbon::parse($lend->tgl_pinjam)->format('d-F-Y') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($lend->transaction->tgl_kembali)->format('d-F-Y') }}</td>
                                                <td>Rp.{{$lend->transaction->denda}}</td>
                                                <td>{{$lend->admin->nama}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="navpills-2" class="tab-pane">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-md-8 col-xl-10">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>Buku</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Sisa Waktu</th>
                                                <th>Petugas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lends as $lend)
                                            @php
                                            $twoWeeksAgo = now()->subWeeks(2);
                                            $tglPinjam = \Carbon\Carbon::parse($lend->tgl_pinjam);
                                            $tglPengembalian = $tglPinjam->copy()->addDays(14);
                                            $sisa_waktu = $tglPengembalian->diffInDays(now());
                                            @endphp
                                            @if ($lend->transaction->tgl_kembali == null && $tglPinjam->greaterThan($twoWeeksAgo))
                                            <tr>
                                                <td>{{$lend->anggota->nama}}</td>
                                                <td>{{$lend->anggota->noktp}}</td>
                                                <td>{{$lend->transaction->book->judul}}</td>
                                                <td>{{ \Carbon\Carbon::parse($lend->tgl_pinjam)->format('d-F-Y') }}</td>
                                                <td>{{$sisa_waktu}} hari</td>
                                                <td>{{$lend->admin->nama}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="navpills-3" class="tab-pane">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-md-8 col-xl-10">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>Buku</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Telat</th>
                                                <th>Denda</th>
                                                <th>Petugas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lends as $lend)
                                            @php
                                            $twoWeeksAgo = now()->subWeeks(2);
                                            $tglPinjam = \Carbon\Carbon::parse($lend->tgl_pinjam);
                                            $telat = $tglPinjam->diffInDays($twoWeeksAgo) + 1;
                                            @endphp

                                            @if ($lend->transaction->tgl_kembali == null && $tglPinjam->lessThan($twoWeeksAgo))
                                            <tr>
                                                <td>{{$lend->anggota->nama}}</td>
                                                <td>{{$lend->anggota->noktp}}</td>
                                                <td>{{$lend->transaction->book->judul}}</td>
                                                <td>{{ \Carbon\Carbon::parse($lend->tgl_pinjam)->format('d-F-Y') }}</td>
                                                <td>{{$telat}} Hari</td>
                                                <td>Rp.{{$lend->transaction->denda}}</td>
                                                <td>{{$lend->admin->nama}}</td>
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
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
@endsection