@extends('base_admin')

@section('title', 'Profile Anggota')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Profile Anggota</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('anggota.index') }}">Profile Anggota</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
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
                    <div class="card-header bg-gradient-gray">
                        <h3 class="mb-0 text-white">Tambah Profile Anggota</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('anggota.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-group-label">Username</label>
                                        <input class="form-control" type="text" placeholder="soekarno1945" value="{{ old('username') }}" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Password</label>
                                        <input class="form-control" type="password" placeholder="12345678" value="{{ old('password') }}" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Nama</label>
                                        <input class="form-control" type="text" placeholder="Soekarno" value="{{ old('nama') }}" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">NIK</label>
                                        <input class="form-control" type="number" placeholder="3316051708450001" value="{{ old('nik') }}" name="nik" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" placeholder="Blora" value="{{ old('kota') }}" name="kota" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" placeholder="" value="{{ old('tanggal_lahir') }}" name="tanggal_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" required>
                                            <option value="pria" {{ old('jenis_kelamin') == 'pria' ? 'selected' : '' }}>Pria</option>
                                            <option value="wanita" {{ old('jenis_kelamin') == 'wanita' ? 'selected' : '' }}>Wanita</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Alamat</label>
                                        <input class="form-control" type="text" placeholder="Jl. Pemuda No. 1" value="{{ old('alamat') }}" name="alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">No. Telp</label>
                                        <input class="form-control" type="number" placeholder="085640123123" value="{{ old('telp') }}" name="telp" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Jabatan</label>
                                        <select class="form-control" name="jabatan" required>
                                            <option value="anggota" {{ old('jabatan') == 'anggota' ? 'selected' : '' }}>Anggota</option>
                                            <option value="admin" {{ old('jabatan') == 'admin' ? 'selected' : '' }}>Ketua</option>
                                        </select>
                                    </div>
                                    <div class="float-left">
                                        <a href="{{ route('anggota.index') }}">
                                            <button type="button" class="btn btn-info">
                                                Batal
                                            </button>
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
            $('#menu-member').addClass('active')
        })
    </script>
@endsection