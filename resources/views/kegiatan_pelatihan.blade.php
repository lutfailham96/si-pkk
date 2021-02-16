@extends('base_admin')

@section('title', 'Kegiatan Pelatihan')

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
                                <li class="breadcrumb-item active" aria-current="page">Kegiatan Pelatihan</li>
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
                        <h3 class="mb-0 text-white">Data Kegiatan Pelatihan</h3>
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
                            <a href="{{ route('kegiatan-pelatihan.create') }}">
                                <button class="btn btn-sm btn-primary">
                                    Tambah Kegiatan Pelatihan
                                </button>
                            </a>
                        </div>
                        @endif
                        <div class="table-responsive py-4">
                            <table class="table table-flush" id="table-kegiatan-pelatihan">
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan Pelatihan</th>
                                    <th>Waktu</th>
                                    <th>Tempat</th>
                                    <th>Pemateri</th>
                                    <th>Peserta</th>
                                    @if(Auth::user()->jabatan == 'admin')
                                    <th>Aksi</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trainings as $training)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $training->kegiatan_pelatihan }}</td>
                                        <td>{{ $training->waktu }}</td>
                                        <td>{{ $training->tempat }}</td>
                                        <td>{{ $training->pemateri }}</td>
                                        <td>{{ $training->peserta }}</td>
                                        @if(Auth::user()->jabatan == 'admin')
                                        <td>
                                            <div class="d-flex text-center">
                                                <a href="{{ route('kegiatan-pelatihan.edit', $training->id) }}">
                                                    <button type="button" class="btn btn-sm btn-warning mr-1">
                                                        Edit
                                                    </button>
                                                </a>
                                                <form method="post" action="{{ route('kegiatan-pelatihan.destroy', $training->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-sm btn-danger ml-1 dlt">
                                                        Hapus
                                                    </button>
                                                </form>
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
            $('#menu-kegiatan-pelatihan').addClass('active')

            const options = {
                language: {
                    paginate: {
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                }
            };
            $('#table-kegiatan-pelatihan').on( 'init.dt', function () {
                $('.dt-buttons .btn').removeClass('btn-secondary').addClass('btn-sm btn-default');
            }).DataTable(options);
        })
    </script>
@endsection