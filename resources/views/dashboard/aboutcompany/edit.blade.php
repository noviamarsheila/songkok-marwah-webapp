@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Profile Company</h1>
    </div>
    <div class="my-4">
        <a href="./dashboard-about-company.html" class="text-decoration-none">kembali...</a>
    </div>
    <!-- Form Tambah Produk -->
    <div class="col-lg-9">
        <form class="mb-5">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" id="name" value="PT INTI MARWAH INDUSTRI" />
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">Nilai Awal</textarea>
                <label for="floatingTextarea2">Deskripsi</label>
            </div>
            <div class="mb-3">
                <label for="aktapendiri" class="form-label">Akta Pendiri</label>
                <input type="text" name="akta_pendiri" class="form-control" id="aktapendiri" value="......" />
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="......" />
            </div>
            <div class="mb-3">
                <label for="workshop" class="form-label">Workshop</label>
                <input type="text" name="workshop" class="form-control" id="workshop" value="......" />
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Handphone</label>
                <input type="number" name="no_hp" class="form-control" id="no_hp" value="......" />
            </div>
            <div class="mb-3">
                <label for="web" class="form-label">Web</label>
                <input type="text" name="web" class="form-control" id="web" value="......" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="......" />
            </div>
            <div class="mb-3">
                <label for="link_map" class="form-label">Link map</label>
                <input type="text" name="link_map" class="form-control" id="link_map" value="......" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
