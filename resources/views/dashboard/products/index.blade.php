@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Produk</h1>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href="" class="badge bg-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-eye" style="font-size: 1rem"></i>
                        </a>
                        <a href="./edit-produk.html" class="badge bg-warning">
                            <i class="bi bi-pencil-square" style="font-size: 1rem"></i>
                        </a>
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                            <i class="bi bi-trash" style="font-size: 1rem"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
