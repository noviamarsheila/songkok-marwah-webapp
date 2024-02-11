@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Team Pemasaran</h1>
    </div>
    <a href="/dashboard/team/create" class="btn btn-primary mb-2">Tambahkan Team Baru</a>
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
                        <th scope="col">Nama</th>
                        <th scope="col">Wilayah</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->wilayah }}</td>
                        <td>{{ $team->no_hp }}</td>
                        <td>
                            <a href="/dashboard/team/{{ $team->id }}/edit" class="badge bg-warning mb-1">
                                <i class="bi bi-pencil-square" style="font-size: 1rem"></i>
                            </a>
                            <form action="/dashboard/team/{{ $team->id }}" method="POST" class="d-inline">
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
