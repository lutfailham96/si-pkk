@extends('base_admin')

@section('title', 'Program Kerja')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Kegiatan Pelatihan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('kegiatan-pelatihan.index') }}">Kegiatan Pelatihan</a></li>
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
                    <div class="card-header bg-gradient-green">
                        <h3 class="mb-0 text-white">Edit Kegiatan Pelatihan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('kegiatan-pelatihan.update', $training->id) }}">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label class="form-group-label">Kegiatan Pelatihan</label>
                                        <input class="form-control" type="text" placeholder="Budidaya Tanaman" value="{{ $training->kegiatan_pelatihan }}" name="kegiatan_pelatihan" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Tempat</label>
                                        <input class="form-control" type="text" placeholder="Balai Desa Cabean" value="{{ $training->tempat }}" name="tempat" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Waktu</label>
                                        <input class="form-control" type="datetime-local" value="{{ $waktu }}" name="waktu" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Pemateri</label>
                                        <input class="form-control" type="text" placeholder="Tim Pemdes" value="{{ $training->pemateri }}" name="pemateri" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-group-label">Peserta</label>
                                        <input class="form-control" type="text" placeholder="Masyarakat RT 01 RW 01" value="{{ $training->peserta }}" name="peserta" required>
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
            $('#menu-kegiatan-pelatihan').addClass('active')
        })
    </script>
@endsection