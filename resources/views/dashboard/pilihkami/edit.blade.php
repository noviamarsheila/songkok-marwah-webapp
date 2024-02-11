@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Edit Menu Mengapa memilih kami</h3>
    </div>
    <div class="my-4">
        <a href="/dashboard/mengapa-pilih-kami" class="text-decoration-none">kembali...</a>
    </div>
    <div class="col-md-5">
        <form method="POST" action="/dashboard/mengapa-pilih-kami/{{ $menu->id }}">
            @method('put')
            @csrf
            <div class="form-floating mb-3">
                <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 140px">{{ $menu->deskripsi }}</textarea>
                <label for="floatingTextarea2">Deskripsi</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
