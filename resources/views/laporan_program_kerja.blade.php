@extends('base_admin')

@section('title', 'Laporan Hasil Program Kerja')

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
                                <li class="breadcrumb-item active" aria-current="page">Laporan</li>
                                <li class="breadcrumb-item active" aria-current="page">Hasil Program Kerja</li>
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
                        <h3 class="mb-0 text-white">Laporan Hasil Program Kerja</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive pt-2 pb-4">
                            <table class="table table-flush" id="table-laporan-program-kerja">
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Program Kerja</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($programs as $program)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $program->program_kerja }}</td>
                                        <td>{{ $program->waktu_mulai }}</td>
                                        <td>{{ $program->waktu_selesai }}</td>
                                        <td>
                                            <div class="d-flex text-center">
                                                <a href="{{ route('program-kerja.detail', $program->id) }}">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        Detail
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
            $('#menu-laporan').addClass('active')
            $('#nav-laporan').click()
            $('#nav-laporan-program-kerja').addClass('active')

            const options = {
                language: {
                    paginate: {
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                }
            };
            $('#table-laporan-program-kerja').on( 'init.dt', function () {
                $('.dt-buttons .btn').removeClass('btn-secondary').addClass('btn-sm btn-default');
            }).DataTable(options);
        })
    </script>
@endsection