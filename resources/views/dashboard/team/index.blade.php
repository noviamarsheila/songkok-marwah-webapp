@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Team Pemasaran</h1>
    </div>
    <a href="./tambah-team.html" class="btn btn-primary">Tambahkan Team Baru</a>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Otto</td>
                        <td>marwah@gmail.com</td>
                        <td>Anne</td>
                        <td>
                            <a href="./edit-team.html" class="badge bg-warning mb-1">
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
    </div>
@endsection
