@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Setting Account</h1>
</div>
<div class="my-4">
    <a href="./dashboard-settings-account.html" class="text-decoration-none">kembali...</a>
</div>
<div class="row">
    <div class="col-lg-5 ps-3 pt-3">
        <h4>Ubah Password</h4>
        <form>
            <div class="mb-3">
                <label for="password" class="form-label">Password Lama</label>
                <input type="password" class="form-control" id="password" />
            </div>
            <div class="mb-3">
                <label for="passwordbaru" class="form-label">Password Baru</label>
                <input type="passwordbaru" class="form-control" id="passwordbaru" />
            </div>
            <div class="mb-3">
                <label for="passwordbaru2" class="form-label">Confirm Password Baru</label>
                <input type="passwordbaru2" class="form-control" id="passwordbaru2" />
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>
@endsection
