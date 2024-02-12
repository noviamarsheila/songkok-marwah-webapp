@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Setting Account</h1>
</div>
<div class="my-4">
    <a href="/dashboard/settings" class="text-decoration-none">kembali...</a>
</div>
<div class="row">
    <div class="col-lg-5 ps-3 pt-3">
        <h4>Ubah Password</h4>

        <form method="POST" action="/dashboard/changepw">
            {{-- @method('PUT') --}}
            @csrf
            <div class="mb-3">
                <label for="password_lama" class="form-label">Password Lama</label>
                <input type="password" class="form-control" id="password_lama" name="password_lama" />
                @error('password_lama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_baru" class="form-label">Password Baru</label>
                <input type="password" class="form-control" id="password_baru" name="password_baru" />
                @error('password_baru')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_baru_confirmation" class="form-label">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" id="password_baru_confirmation" name="password_baru_confirmation" />
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

    </div>
</div>
@endsection
