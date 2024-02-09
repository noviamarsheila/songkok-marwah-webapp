@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Produk</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8 d-flex justify-content-between" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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
                    <h4 class="modal-title fw-bold text-primary" id="showName">Name</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Category: <small id="showCategory"></small></h6>
                    <div class="">
                        <img src="" alt="" id="showImage" class="img-fluid" style="max-width: 200px">
                    </div>
                    <h6>Deskripsi: </h6>
                    <div id="showDeskripsi"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        function showProduct(product) {
            const showName = document.getElementById('showName');
            const showImage = document.getElementById('showImage');
            const showCategory = document.getElementById('showCategory');
            const showDeskripsi = document.getElementById('showDeskripsi');

            showName.textContent = product.name;
            showCategory.textContent = product.category.name;
            showImage.src = `{{ asset('images/products/${product.image}') }}`;
            showDeskripsi.innerHTML = product.deskripsi;
        }
    </script>
@endsection
