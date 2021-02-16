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
                                <li class="breadcrumb-item active" aria-current="page">Profile Anggota</li>
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
                        <h3 class="mb-0 text-white">Data Profile Anggota</h3>
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
                            <a href="{{ route('tambah-anggota') }}">
                                <button class="btn btn-primary btn-sm">
                                    Tambah Anggota
                                </button>
                            </a>
                        </div>
                        @endif
                        <div class="table-responsive py-4">
                            <table class="table table-flush" id="table-member">
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    @if(Auth::user()->jabatan == 'admin')
                                    <th>Username</th>
                                    @endif
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>No. Telp</th>
                                    <th>Jabatan</th>
                                    @if(Auth::user()->jabatan == 'admin')
                                    <th>Aksi</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($anggotas as $anggota)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        @if(Auth::user()->jabatan == 'admin')
                                        <td>{{ $anggota->username }}</td>
                                        @endif
                                        <td>{{ $anggota->nama }}</td>
                                        <td>{{ $anggota->nik }}</td>
                                        <td>{{ $anggota->kota }}, {{ $anggota->tanngal_lahir }}</td>
                                        <td>{{ $anggota->jenis_kelamin }}</td>
                                        <td>{{ $anggota->alamat }}</td>
                                        <td>{{ $anggota->telp }}</td>
                                        <td>{{ $anggota->jabatan }}</td>
                                        @if(Auth::user()->jabatan == 'admin')
                                        <td>
                                            <div class="d-flex text-center">
                                                <a href="{{ route('anggota.edit', $anggota->id) }}">
                                                    <button type="button" class="btn-sm btn-warning mr-1">
                                                        Edit
                                                    </button>
                                                </a>
{{--                                                <button data-id="{{ $anggota->id }}" data-csrf="{{ @csrf_token() }}" type="button" class="btn-sm btn-danger ml-1 dlt">--}}
{{--                                                    Hapus--}}
{{--                                                </button>--}}
                                                <form method="post" action="{{ route('anggota.destroy', $anggota->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn-sm btn-danger ml-1 dlt">
                                                        Hapus
                                                    </button>
                                                </form>
                                                <form method="post" action="{{ route('anggota.reset', $anggota->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn-sm btn-success ml-1 dlt">
                                                        Reset
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
            $('#menu-member').addClass('active')

            const buttons = ["print"];
            const options = {
                // lengthChange: !1,
                // dom: 'Bfrtip',
                // buttons: buttons,
                language: {
                    paginate: {
                        previous: "<i class='fas fa-angle-left'>",
                        next: "<i class='fas fa-angle-right'>"
                    }
                },
                columnDefs: [
                    {
                        render: function (data) {
                            if (data === 'wanita') {
                                return '<span class="badge badge-danger">Wanita</span>'
                            } else {
                                return '<span class="badge badge-primary">Pria</span>'
                            }
                        },
                        targets: 5
                    },
                    {
                        render: function (data) {
                            if (data === 'anggota') {
                                return '<span class="badge badge-warning">Anggota</span>'
                            } else {
                                return '<span class="badge badge-success">Admin</span>'
                            }
                        },
                        targets: 8
                    },
                ]
            };
            $('#table-member').on( 'init.dt', function () {
                $('.dt-buttons .btn').removeClass('btn-secondary').addClass('btn-sm btn-default');
            }).DataTable(options);

            // $('#table-member').on('click', '.dlt', function () {
            //     const id = $(this).data('id')
            //     const csrf = $(this).data('csrf')
            //     axios.delete('/admin/anggota/' + id).then((res) => {
            //         console.log(res)
            //         // window.location.href = '/admin/anggota'
            //     })
            // })
        })
    </script>
@endsection