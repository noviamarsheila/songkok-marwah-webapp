@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Menu</h1>
    </div>
    <a href="./tambah-whychooseus.html" class="btn btn-primary">Tambahkan Menu</a>
    <!-- tabel -->
    <div class="row mt-3 col-md-9 ms-2 mb-5">
        <table class="table table-striped small">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis excepturi facilis incidunt quidem corrupti quod cum voluptatibussdaaa susLorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis excepturi
                        facilis incidunt quidem corrupti quod cum voluptatibussdaaa suscipit nctetur adipisicing elit.
                    </td>
                    <td>
                        <a href="./edit-whychooseus.html" class="badge bg-warning mb-1">
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
