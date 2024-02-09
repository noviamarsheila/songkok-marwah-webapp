@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Kategori</h1>
    </div>
    @include('dashboard.categories.linkback')
    <div class="col-md-5">
        <form method="POST" action="/dashboard/categories/{{ $category->slug }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="name" value="{{ $category->name }}" />
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script>
        // function generate slug
        const nama = document.getElementById("name");
        const slug = document.getElementById("slug");

        nama.addEventListener("keyup", function () {
            console.log(nama.value)
            let preslug = nama.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

    </script>
@endsection


