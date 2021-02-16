@extends('base_auth')

@section('title', 'Register')

@section('main-card')
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-header bg-transparent pb-2">
            <div class="float-left d-flex">
                <img src="{{ url('img/logo-pkk.png') }}" style="width: 32px; height: 32px" class="mr-2" />
                <h2 class="text-muted text-uppercase my-auto">Daftar</h2>
            </div>
            <div class="float-right my-auto">
                <a href="{{ route('login.index') }}" class="my-auto">
                    <button class="btn btn-icon btn-primary btn-sm" type="button">
                        <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                        <span class="btn-inner--text">Sudah Punya Akun</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body px-lg-5 py-lg-5">
            <form role="form" class="mt--4">
                <div class="form-group mb-3">
                    <label>NIK</label>
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                        </div>
                        <input class="form-control" placeholder="NIK" type="number">
                    </div>
                    <small><em>NB: NIK harus sesuai dengan NIK di kartu keluarga</em></small>
                </div>
                <div class="form-group mb-3">
                    <label>Username</label>
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                        </div>
                        <input class="form-control" placeholder="Username" type="text">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label>Verifikasi Password</label>
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Verifikasi Password" type="password">
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-success my-4">Buat Akun</button>
                </div>
            </form>
        </div>
    </div>
@endsection