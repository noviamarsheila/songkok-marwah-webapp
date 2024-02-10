@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Setting Account</h1>
</div>
<div class="row">
    <div class="col-lg-5 py-2 ps-3">
        <a href="./dashboard-changepw.html" class="pb-3 d-block">ubah password?</a>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" autocomplete="off" />
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" autocomplete="off" />
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Email </label>
                <input type="email" class="form-control" id="name" autocomplete="off" />
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
