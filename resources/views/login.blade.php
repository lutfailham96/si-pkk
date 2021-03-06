@extends('base_auth')

@section('title', 'Login')

@section('main-card')
    <div class="card bg-secondary border-0 mb-0">
        <div class="card-header bg-transparent pb-2">
            <div class="float-left d-flex">
                <img src="{{ url('img/logo-pkk.png') }}" style="width: 32px; height: 32px" class="mr-2" />
                <h2 class="text-muted text-uppercase">Login</h2>
            </div>
{{--            <div class="float-right my-auto">--}}
{{--                <a href="{{ route('register.index') }}" class="my-auto">--}}
{{--                    <button class="btn btn-icon btn-primary btn-sm" type="button">--}}
{{--                        <span class="btn-inner--icon"><i class="ni ni-send"></i></span>--}}
{{--                        <span class="btn-inner--text">Buat Akun Baru</span>--}}
{{--                    </button>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
        <div class="card-body px-lg-5 py-lg-5">
{{--                                    <div class="text-center text-muted mb-4">--}}
{{--                                        <small>Or sign in with credentials</small>--}}
{{--                                    </div>--}}
            <form role="form" method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                        </div>
                        <input class="form-control" placeholder="Username" type="text" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password" name="password">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection