@extends('login.layouts.main')

@section('container')
    <main class="form-signin w-100 m-auto shadow-lg">
        <form action="/login" method="POST">
            @csrf
            <div class="d-flex align-items-end mb-2">
                <img src="img/logo.png" alt="logo" width="50" />
                <h1 class="h3 ms-2 fw-bold fs-3">Login</h1>
            </div>
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif
            <div class="form-floating">
                <input
                    type="email"
                    class="form-control"
                    id="floatingInput"
                    placeholder="name@example.com"
                    autocomplete="off"
                    name="email"
                />
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input
                    type="password"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Password"
                    name="password"
                />
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>
        <p class="mt-5 mb-3 text-body-secondary">
            &copy; <span id="currentYear"></span> - PT INTI MARWAH INDUSTRI
        </p>
    </main>
@endsection
