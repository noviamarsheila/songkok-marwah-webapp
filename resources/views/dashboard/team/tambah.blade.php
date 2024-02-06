@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Team</h1>
</div>
<div class="my-4">
    <a href="./dashboard-team.html" class="text-decoration-none">kembali...</a>
</div>
<div class="col-md-5">
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" />
        </div>
        <div class="mb-3">
            <label for="wilayah" class="form-label">Wilayah</label>
            <input type="text" class="form-control" id="wilayah" />
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">No Handphone</label>
            <input type="number" class="form-control" id="nohp" />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
