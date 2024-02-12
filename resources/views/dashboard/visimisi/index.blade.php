@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Visi Misi</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8 d-flex justify-content-between" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="/dashboard/visi-misi/create" class="btn btn-primary">Tambahkan Visi Misi</a>
    <!-- tabel -->
    <div class="row col-md-8 mt-3 ms-2 mb-5">
        <table class="table table-striped small">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->tipe }}</td>
                        <td>
                            <a href="/dashboard/visi-misi/{{ $item->id }}/edit" class="badge bg-warning mb-1">
                                <i class="bi bi-pencil-square" style="font-size: 1rem"></i>
                            </a>
                            <form action="/dashboard/visi-misi/{{ $item->id }}" method="POST" class="d-inline">
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
@endsection
