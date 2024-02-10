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
            @foreach ($profiles as $profile)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->email }}</td>
                <td>{{ $profile->workshop }}</td>
                <td>
                    <a href="" class="badge bg-info mb-1" data-bs-toggle="modal" onclick="showProfile({{ $profile }}) data-bs-target="#ModalShowProfile">
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
            @endforeach

        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalShowProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary" id="exampleModalLabel" id="showName">Nama Perusahaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <h6>Deskripsi:
                        <small id="showDeskripsi"></small>
                    </h6>
                    <h6>Akta Pendiri:
                        <small id="showAkta"></small>
                    </h6>
                    <h6>Alamat:
                        <small id="showAlamat"></small>
                    </h6>
                    <h6>Workshop:
                        <small id="showWorkshop"></small>
                    </h6>
                    <h6>Email:
                        <small id="showEmail"></small>
                    </h6>
                    <h6>No HP:
                        <small id="showNohp"></small>
                    </h6>
                    <h6>Web:
                        <small id="showWeb"></small>
                    </h6>
                    <h6>Link Map:
                        <small id="linkMap"></small>
                    </h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showProfile(profile) {
        const showName = document.getElementById('showName');
        const showDeskripsi = document.getElementById('showDeskripsi');
        const showAktaPendiri = document.getElementById('showAkta');
        const showAlamat = document.getElementById('showAlamat');
        const showWorkshop = document.getElementById('showWorkshop');
        const showNohp = document.getElementById('showNohp');
        const showWeb = document.getElementById('showWeb');
        const showEmail = document.getElementById('showEmail');
        const showLinkMap = document.getElementById('linkMap');

        showName.textContent = profile.name;
        showDeskripsi.innerHTML = profile.deskripsi;
        showAktaPendiri.innerHTML = profile.akta_pendiri;
        showAlamat.innerHTML = profile.alamat;
        showWorkshop.innerHTML = profile.workshop;
        showNohp.innerHTML = profile.no_hp;
        showWeb.innerHTML =profile.web;
        showEmail.innerHTML = profile.email;
        showLinkMap.innerHTML = profile.link_map;
    }
</script>

@endsection
