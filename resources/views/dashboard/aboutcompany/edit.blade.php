@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Profile Company</h1>
    </div>
    <div class="my-4">
        <a href="/dashboard/about-company" class="text-decoration-none">kembali...</a>
    </div>
    <!-- Form Tambah Produk -->
    <div class="col-lg-9">
        <form class="mb-5" action="/dashboard/about-company/{{ $profile->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $profile->name) }}"" />
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Brand</label>
                <input type="text" class="form-control" id="name" name="nama_brand" value="{{ old('name', $profile->nama_brand) }}"" />
            </div>
            <div class="mb-3">
                <label for="image" class="form-label d-block">Logo</label>
                <input type="hidden" name="oldImage" value="{{ $profile->logo }}" width="150" height="">
                @if ($profile->logo)
                    <img src="{{ asset('images/logo/' . $profile->logo) }}"
                        class="img-preview img-fluid mb-3" alt="" width="150" height="">
                @else
                    <img class="img-preview img-fluid mb-3" alt="">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="logo" accept="image/*" onchange="previewImage()" width="150" height=""/>

                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px"><?php echo htmlspecialchars($profile->deskripsi); ?></textarea>
                <label for="floatingTextarea2">Deskripsi</label>
            </div>
            <div class="mb-3">
                <label for="aktapendiri" class="form-label">Akta Pendiri</label>
                <input type="text" name="akta_pendiri" class="form-control" id="aktapendiri"
                value="{{ old('akta_pendiri', $profile->akta_pendiri) }}" />
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="{{ old('alamat', $profile->alamat) }}" />
            </div>
            <div class="mb-3">
                <label for="workshop" class="form-label">Workshop</label>
                <input type="text" name="workshop" class="form-control" id="workshop"
                value="{{ old('workshop', $profile->workshop) }}" />
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Handphone</label>
                <input type="number" name="no_hp" class="form-control" id="no_hp" value="{{ old('no_hp', $profile->no_hp) }}"/>
            </div>
            <div class="mb-3">
                <label for="web" class="form-label">Web</label>
                <input type="text" name="web" class="form-control" id="web" value="{{ old('web', $profile->web) }}" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $profile->email) }}" />
            </div>
            <div class="mb-3">
                <label for="link_map" class="form-label">Link map</label>
                <input type="text" name="link_map" class="form-control" id="link_map"
                value="{{ old('link_map', $profile->link_map) }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
