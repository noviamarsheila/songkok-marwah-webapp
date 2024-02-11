@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Menu FAQ</h1>
    </div>
    <a href="/dashboard/faq/create" class="btn btn-primary mb-2">Tambahkan FAQ Baru</a>
    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8 d-flex justify-content-between" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- tabel -->
    <div class="row col-md-9 mt-3 ms-2 mb-5">
        <table class="table table-striped small">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Heading</th>
                    <th scope="col">Target</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Jawaban</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $faq)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $faq->heading }}</td>
                    <td>{{ $faq->target }}</td>
                    <td>{{ $faq->pertanyaan }}</td>
                    <td>{{ $faq->jawaban }}</td>
                    <td>
                        <a href="/dashboard/faq/{{ $faq->id }}/edit" class="badge bg-warning mb-1">
                            <i class="bi bi-pencil-square" style="font-size: 1rem"></i>
                        </a>
                        <form action="/dashboard/faq/{{ $faq->id }}" method="POST" class="d-inline">
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
