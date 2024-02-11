@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Sosmed</h1>
    </div>
    <div class="my-4">
        <a href="/dashboard/sosmed" class="text-decoration-none">kembali...</a>
    </div>
    <div class="col-md-5">
        <form method="POST" action="/dashboard/sosmed/{{ $sosmed->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name"  name="nama" value="{{ $sosmed->nama }}" />
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link Sosmed</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $sosmed->link }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
