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
                                <li class="breadcrumb-item active" aria-current="page">Program Kerja</li>
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
                        <h3 class="mb-0 text-white">Data Program Kerja</h3>
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
                        @if(Auth::user()->jabatan == 'admin')
                        <div class="float-left">
                            <a href="{{ route('program-kerja.create') }}">
                                <button class="btn btn-primary btn-sm">
                                    Tambah Program Kerja
                                </button>
                            </a>
                        </div>
                        @endif
                        <div class="table-responsive py-4">
                            <table class="table table-flush" id="table-program-kerja">
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Program Kerja</th>
                                    <th>Tujuan</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Tempat</th>
                                    <th>Sasaran</th>
                                    <th>Pelaksana</th>
                                    <th>Status</th>
                                    @if(Auth::user()->jabatan == 'admin')
                                    <th>Aksi</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($programs as $program)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $program->program_kerja }}</td>
                                        <td>{{ $program->tujuan }}</td>
                                        <td>{{ $program->waktu_mulai }}</td>
                                        @if($program->waktu_selesai)
                                            <td>{{ $program->waktu_selesai }}</td>
                                        @else
                                            <td><span class="badge badge-primary">Belum Tersedia</span></td>
                                        @endif
                                        <td>{{ $program->tempat }}</td>
                                        <td>{{ $program->sasaran }}</td>
                                        <td><span class="badge badge-warning">{{ $program->pelaksana }}</span></td>
                                        @if($program->status)
                                            <td><span class="badge badge-pill badge-success">Sudah Terlaksana</span></td>
                                        @else
                                            <td><span class="badge badge-pill badge-primary">Sedang Dilaksanakan</span></td>
                                        @endif
                                        @if(Auth::user()->jabatan == 'admin')
                                        <td>
                                            <div class="d-flex text-center">
                                                <a href="{{ route('program-kerja.edit', $program->id) }}">
                                                    <button type="button" class="btn btn-sm btn-warning mr-1">
                                                        Edit
                                                    </button>
                                                </a>
                                                <form method="post" action="{{ route('program-kerja.destroy', $program->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-sm btn-danger ml-1 dlt">
                                                        Hapus
                                                    </button>
                                                </form>
                                                @if(!$program->status)
                                                    <a href="{{ route('program-kerja.show', $program->id) }}">
                                                        <button type="button" class="btn btn-sm btn-primary ml-1">
                                                            Selesai
                                                        </button>
                                                    </a>
                                                @endif
                                            </div>
                                        </td>
                                        @endif
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
            $('#menu-program-kerja').addClass('active')

            const options = {
                language: {
                    paginate: {
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                }
            };
            $('#table-program-kerja').on( 'init.dt', function () {
                $('.dt-buttons .btn').removeClass('btn-secondary').addClass('btn-sm btn-default');
            }).DataTable(options);
        })
    </script>
@endsection