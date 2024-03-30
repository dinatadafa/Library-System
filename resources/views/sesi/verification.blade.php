@extends('layout')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Verification</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="table-responsive">
        <table class="table header-border">
            <thead>
                <tr>
                    <th style="text-align: center;">NIK</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Alamat</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Kota</th>
                    <th style="text-align: center;">Alamat</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td><a href="javascript:void(0)">{{ $member -> noktp }}</a>
                    </td>
                    <td>{{ $member -> nama }}</td>
                    <td><span class="text-muted">{{ $member -> alamat }}</span>
                    </td>
                    @if ($member->idstatus == 1)
                    <td style="text-align: center;">
                        <span class="label gradient-1 rounded">{{ $member->status->kondisi }}</span>
                    </td>
                    @else
                    <td style="text-align: center;">
                        <span class="label gradient-2 rounded">{{ $member->status->kondisi }}</span>
                    </td>
                    @endif
                    <td>{{ $member -> kota }}</td>
                    <td>{{ $member -> alamat }}</td>
                    <td style="text-align: center;">
                        <form method="POST" action="/dashboard/verification/{{ $member -> noktp }}">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn mb-1 btn-success">Details <span class="btn-icon-right"><i class="fa fa-check"></i></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- #/ container -->
    @endsection