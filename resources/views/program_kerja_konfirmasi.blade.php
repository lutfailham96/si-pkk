@extends('base_admin')

@section('title', 'Program Kerja')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Konfirmasi Program Kerja</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Program Kerja</li>
                                <li class="breadcrumb-item active" aria-current="page">Konfirmasi</li>
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
                        <h3 class="mb-0">Konfirmasi Program Kerja</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('program-kerja.confirm') }}">
                            @csrf
                            <input type="hidden" name="program-kerja" value="{{ $program->id }}">
                            <div class="form-group">
                                <label>Program Kerja</label>
                                <input class="form-control" type="text" disabled value="{{ $program->program_kerja }}">
                            </div>
                            <div class="form-group">
                                <label>Hasil</label>
                                <textarea class="form-control" rows="5" name="hasil" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Keterangan (Opsional)</label>
                                <textarea class="form-control" name="keterangan" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('program-kerja.index') }}">
                                    <button type="button" class="btn btn-info">Batal</button>
                                </a>
                                <button type="submit" class="btn btn-success">Selesai</button>
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
            $('#menu-program-kerja').addClass('active')
        })
    </script>
@endsection