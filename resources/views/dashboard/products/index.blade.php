@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Produk</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <a href="/dashboard/products/create" class="btn btn-primary">Tambahkan Produk Baru</a>
    <!-- tabel -->
    <div class="row col-md-8 mt-3 ms-2 mb-5">
        <table class="table table-striped small">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a href="" class="badge bg-info" data-bs-toggle="modal"
                                data-bs-target="#modalShowProduct" onclick="showProduct({{ $product }})">
                                <i class="bi bi-eye" style="font-size: 1rem"></i>
                            </a>
                            <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning">
                                <i class="bi bi-pencil-square" style="font-size: 1rem"></i>
                            </a>
                            <form action="/dashboard/products/{{ $product->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                    <i class="bi bi-trash" style="font-size: 1rem"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalShowProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 id="showName">Name</h4>
                    <h4 id="showSlug">Slug</h4>
                    <h4 id="showCategory">category:</h4>
                    <div>
                        <img src="" alt="" id="showImage">
                    </div>
                    <div id="showDeskripsi"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showProduct(product) {
            const showName = document.getElementById('showName');
            const showSlug = document.getElementById('showSlug');
            const showImage = document.getElementById('showImage');
            const showCategory = document.getElementById('showCategory');
            const showDeskripsi = document.getElementById('showDeskripsi');

            showName.textContent = product.name;
            showSlug.textContent = product.slug;
            showCategory.textContent = product.category.name;
            showImage.src = `{{ asset('images/products/${product.image}') }}`;
            showDeskripsi.innerHTML = product.deskripsi;
        }
    </script>
@endsection
