@extends('base_admin')

@section('title', 'Program Kerja')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Program Kerja</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('program-kerja.index') }}">Program Kerja</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                    <div class="card-header bg-gradient-red">
                        <h3 class="mb-0 text-white">Edit Program Kerja</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('program-kerja.update', $program->id) }}">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label class="form-group-label">Program Kerja</label>
                                        <input class="form-control" type="text" placeholder="Budidaya Tanaman" value="{{ $program->program_kerja }}" name="program_kerja" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Tujuan</label>
                                        <input class="form-control" type="text" placeholder="Pemberdayaan Manusia" value="{{ $program->tujuan }}" name="tujuan" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Waktu Mulai</label>
                                        <input class="form-control" type="date" placeholder="01/01/2020" value="{{ $program->waktu_mulai }}" name="waktu_mulai" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Tempat</label>
                                        <input class="form-control" type="text" placeholder="Balai Desa Cabean" value="{{ $program->tempat }}" name="tempat" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Sasaran</label>
                                        <input class="form-control" type="text" placeholder="Masyarakat RT 01 RW 01" value="{{ $program->sasaran }}" name="sasaran" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Pelaksana</label>
                                        <select class="form-control" name="pelaksana" required>
                                            <option value="POKJA I" {{ $program->pelaksana == 'POKJA I' ? 'selected' : '' }} >POKJA I</option>
                                            <option value="POKJA II" {{ $program->pelaksana == 'POKJA II' ? 'selected' : '' }}>POKJA II</option>
                                            <option value="POKJA III" {{ $program->pelaksana == 'POKJA III' ? 'selected' : '' }}>POKJA III</option>
                                            <option value="POKJA IV" {{ $program->pelaksana == 'POKJA IV' ? 'selected' : '' }}>POKJA IV</option>
                                        </select>
                                    </div>
                                    <div class="float-left">
                                        <a href="{{ route('program-kerja.index') }}">
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
            $('#menu-program-kerja').addClass('active')
        })
    </script>
@endsection