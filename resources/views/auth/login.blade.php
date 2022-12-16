@extends('layouts.auth')

@push('style')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

@section('content')

<div class="w-100">
<center><img src="https://www.pngitem.com/pimgs/m/145-1456360_transparent-cop-png-security-guard-clipart-black-and.png" style="width:254px;height:292px;"></center>
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('auth.login') }}" id="login-form">
            <center><h1 class="h3 mb-3 fw-normal">Silahkan Login</h1></center>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputEmail" name="email"
                    placeholder="name@example.com">
                <label for="floatingInputEmail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckRemember">
                <label class="form-check-label" for="flexCheckRemember">
                    Ingatkan Saya di Perangkat ini
                </label>
            </div>

            <button class="w-100 btn btn-primary" type="submit" id="login-form-button">Masuk</button>
            <center><p class="mt-5 mb-3 text-muted">&copy; 2022</p></center>
        </form>
    </main>

</div>
@endsection

@push('script')
<script type="module" src="{{ asset('js/auth/login.js') }}"></script>
@endpush