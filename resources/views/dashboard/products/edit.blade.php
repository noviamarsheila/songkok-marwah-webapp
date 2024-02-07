@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Produk</h1>
    </div>
    <div class="my-4">
        <a href="./dashboard-produk.html" class="">kembali...</a>
    </div>
    <!-- Form Tambah Produk -->
    <div class="col-lg-9">
        <form class="mb-5">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" value="{{ $product->name }}" />
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="" />
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    <option value="1">Songkok</option>
                    <option value="2" selected>Sarung</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label d-block">Post Image</label>
                <img src="./img/produk1.png" alt="" class="img-preview img-fluid mb-3 col-sm-3" />
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()" />
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                <input id="deskripsi" type="hidden" name="deskripsi" value="" />
                <trix-editor input="deskripsi"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
