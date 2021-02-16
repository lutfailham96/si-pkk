@extends('base_admin')

@section('title', 'Hasil Program Kerja')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Laporan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hasil Program Kerja</li>
                                <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                    <div class="card-header bg-gradient-indigo">
                        <h3 class="mb-0 text-white">Detail Hasil Program Kerja</h3>
                    </div>
                    <div class="card-body">
                        <form id="form-detail" method="post" action="{{ route('program-kerja.confirm') }}">
                            @csrf
                            <input type="hidden" name="program-kerja" value="{{ $program->id }}">
                            <div class="card container" id="printable">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Program Kerja</label>
                                        <input class="form-control" type="text" readonly value="{{ $program->program_kerja }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tujuan</label>
                                        <input class="form-control" type="text" value="{{ $program->tujuan }}" readonly>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Waktu Mulai</label>
                                                <input class="form-control" type="date" value="{{ $program->waktu_mulai }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Waktu Selesai</label>
                                                <input class="form-control" type="date" value="{{ $program->waktu_selesai }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat</label>
                                        <input class="form-control" type="text" value="{{ $program->tempat }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Sasaran</label>
                                        <input class="form-control" type="text" value="{{ $program->sasaran }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Pelaksana</label>
                                        <input class="form-control" type="text" value="{{ $program->pelaksana }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Hasil</label>
                                        <textarea class="form-control" rows="5" name="hasil" readonly>{{ $program->hasil }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan (Opsional)</label>
                                        <textarea class="form-control" name="keterangan" readonly rows="2">{{ $program->keterangan }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('laporan-program-kerja') }}">
                                    <button type="button" class="btn btn-info">Kembali</button>
                                </a>
                                <button type="submit" class="btn btn-success">Cetak</button>
                            </div>
                        </form>
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
            $('#menu-laporan').addClass('active')
            $('#nav-laporan').click()
            $('#nav-laporan-program-kerja').addClass('active')
            $('#form-detail').on('submit', function (e) {
                e.preventDefault()
                window.print()
            })
        })
    </script>
@endsection