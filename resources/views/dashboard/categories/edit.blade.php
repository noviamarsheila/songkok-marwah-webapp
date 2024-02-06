@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Kategori</h1>
    </div>
    <div class="col-md-5">
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="name" value="Songkok" />
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="" />
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    {{-- <script>
        // function generate slug
        const nama = document.getElementById("name");
        const slug = document.getElementById("slug");

        nama.addEventListener("keyup", function () {
            console.log(nama.value)
            let preslug = nama.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

    </script> --}}
@endsection


