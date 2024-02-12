@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Visi Misi</h1>
    </div>
    @include('dashboard.visimisi.linkback')
    <div class="col-md-5">
        <form method="POST" action="/dashboard/visi-misi">
            @csrf
            <div class="mb-3">
                <label for="tipe" class="form-label">Kategori</label>
                <select class="form-select" name="tipe" required>
                    <option value="visi">Visi</option>
                    <option value="misi">Misi</option>
                </select>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px" name="deskripsi"></textarea>
                <label for="floatingTextarea2">Deskripsi</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
