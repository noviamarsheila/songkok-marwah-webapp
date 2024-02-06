@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tentang Profil Perusahaan</h1>
</div>
<!-- tabel -->
<div class="row col-lg-8 mt-3 ms-2 mb-5">
    <table class="table table-striped small">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Email</th>
                <th scope="col">Workshop</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Ott</td>
                <td>marwah@gmail.com</td>
                <td>Anne</td>
                <td>
                    <a href="" class="badge bg-info mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-eye" style="font-size: 1rem"></i>
                    </a>
                    <a href="./edit-aboutcompany.html" class="badge bg-warning mb-1">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary" id="exampleModalLabel">Nama Perusahaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <h6>Deskripsi:</h6>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores qui id esse facere consectetur repellendus reiciendis non. Illo, illum assumenda? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, maxime.
                    </p>
                </div>
                <div>
                    <h6>Akta Pendiri:</h6>
                    <p>Songkok</p>
                </div>
                <div>
                    <h6>Alamat:</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div>
                    <h6>Workshop:</h6>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div>
                    <h6>Email:</h6>
                    <p>info@songkokmarwah.com</p>
                </div>
                <div>
                    <h6>No HP:</h6>
                    <p>082367489918</p>
                </div>
                <div>
                    <h6>Web:</h6>
                    <p>songkokmarwah.com</p>
                </div>
                <div>
                    <h6>Link Map:</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, corrupti sequi! Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
