@extends('layout')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="/dashboard/verification">Verification</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Details</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="col-lg-4 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center mb-4">
                    <img class="mr-3" src="/assets/images/avatar/{{ $member -> file_ktp }}" width="80" height="80" alt="">
                    <div class="media-body">
                        <h3 class="mb-0">{{ $member -> nama }}</h3>
                        <p class="text-muted mb-0">{{ $member -> kota }}</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <form action="/dashboard/verification/{{ $member->noktp }}/verify" method="post">
                            @csrf
                            @method('post')
                            <button type="submit" class="btn btn-danger px-5" @if ($member->idstatus == 1) disabled @endif>
                                @if ($member->idstatus == 1)
                                Sudah Verifikasi
                                @else
                                Verifikasi
                                @endif
                            </button>
                        </form>
                    </div>
                </div>

                <h4>About Person</h4>
                <ul class="card-profile__info">
                    <table>
                        <tr>
                            <td><strong class="text-dark mr-4">NIK</strong></td>
                            <td><span>{{ $member->noktp }}</span></td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark mr-4">Nama</strong></td>
                            <td><span>{{ $member->nama }}</span></td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark mr-4">Alamat</strong></td>
                            <td><span>{{ $member->alamat }}</span></td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark mr-4">Phone</strong></td>
                            <td><span>{{ $member->no_telp }}</span></td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark mr-4">Email</strong></td>
                            <td><span>{{ $member->email }}</span></td>
                        </tr>
                    </table>
                </ul>
                <a href="/dashboard/verification" type="button" class="btn mb-1 btn-secondary">Back</a>
            </div>
        </div>
    </div>

</div>
<!-- #/ container -->
@endsection