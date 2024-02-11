@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sosial Media</h1>
    </div>
    <a href="/dashboard/sosmed/create" class="btn btn-primary mb-2">Tambahkan Sosial Media</a>
    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8 d-flex justify-content-between" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- tabel -->
    <div class="row col-lg-8 mt-3 ms-2 mb-5">
        <div class="table-responsive-md">
            <table class="table table-striped small">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sosial Media</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sosmeds as $sosmed)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $sosmed->nama }}</td>
                        <td>{{ $sosmed->link }}</td>
                        <td>
                            <a href="/dashboard/sosmed/{{ $sosmed->id }}/edit" class="badge bg-warning mb-1">
                                <i class="bi bi-pencil-square" style="font-size: 1rem"></i>
                            </a>
                            <form action="/dashboard/sosmed/{{ $sosmed->id }}" method="POST" class="d-inline">
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
    </div>
@endsection
