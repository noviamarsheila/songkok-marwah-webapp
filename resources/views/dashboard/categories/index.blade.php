@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Kategori</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8 d-flex justify-content-between" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="dashboard/categories/create" class="btn btn-primary">Tambahkan Kategori Baru</a>
    <!-- tabel -->
    <div class="row col-md-8 mt-3 ms-2 mb-5">
        <table class="table table-striped small">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="./edit-category.html" class="badge bg-warning">
                            <i class="bi bi-pencil-square" style="font-size: 1rem"></i>
                        </a>
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                            <i class="bi bi-trash" style="font-size: 1rem"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
