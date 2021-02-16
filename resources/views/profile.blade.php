@extends('base_admin')

@section('title', 'Profile')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Profile</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('anggota.index') }}">Profile</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="float-left mb-0">Profile</h3>
                        <div class="float-right">
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-password">Ganti Password</button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text"><strong>{{ $message }}</strong></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text"><strong>{{ $message }}</strong></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('profile.update', $anggota->id) }}">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <input type="hidden" value="{{ $anggota->id }}">
                                    <div class="form-group">
                                        <label class="form-group-label">Username</label>
                                        <input class="form-control" type="text" placeholder="soekarno1945" value="{{ $anggota->username }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Nama</label>
                                        <input class="form-control" type="text" placeholder="Soekarno" value="{{ $anggota->nama }}" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">NIK</label>
                                        <input class="form-control" type="number" placeholder="3316051708450001" value="{{ $anggota->nik }}" name="nik" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" placeholder="Blora" value="{{ $anggota->kota }}" name="kota" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" placeholder="" value="{{ $anggota->tanggal_lahir }}" name="tanggal_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" required>
                                            <option value="pria" {{ $anggota->jenis_kelamin == 'pria' ? 'selected' : '' }}>Pria</option>
                                            <option value="wanita" {{ $anggota->jenis_kelamin == 'wanita' ? 'selected' : '' }}>Wanita</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Alamat</label>
                                        <input class="form-control" type="text" placeholder="Jl. Pemuda No. 1" value="{{ $anggota->alamat }}" name="alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">No. Telp</label>
                                        <input class="form-control" type="text" placeholder="085640123123" value="{{ $anggota->telp }}" name="telp" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Jabatan</label>
                                        <input class="form-control" type="text" value="{{ $anggota->jabatan }}" disabled required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-password" tabindex="-1" role="dialog" aria-labelledby="modal-password" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ganti Kata Sandi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form-password" method="post" action="{{ route('profile.changePassword') }}">
                            @csrf
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" class="form-control" type="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input id="password-confirmation" class="form-control" type="password" name="password-confirmation" required>
                            </div>
                            <button id="submit-button" type="submit" class="btn btn-primary" disabled>Simpan</button>
                        </form>
                    </div>
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                        <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!-- Footer -->
        @include('base_admin_footer')
    </div>
@endsection

@section('page-js')
    <script>
        $(document).ready(function () {
            // $('#form-password').on('submit', function (e) {
            //     e.preventDefault()
            // })

            $('#password-confirmation').keyup(function () {
                checkPassword()
            })
        })

        function checkPassword() {
            const password = $('#password').val()
            const passwordConfirmation = $('#password-confirmation').val()
            if (password !== passwordConfirmation) {
                // $('')
                $('#submit-button').prop('disabled', true)
            } else {
                $('#submit-button').prop('disabled', false)
            }
        }
    </script>
@endsection