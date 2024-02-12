@extends('profile.layouts.main')

@section('content')
    @php
        // Mengubah nomor telepon ke format internasional (jika diperlukan)
        $no_hp = $profilecompany->no_hp;
        if (substr($no_hp, 0, 1) === '0') {
            $no_hp = '62' . substr($no_hp, 1);
        }
    @endphp
    <!------------------- KONTAK KAMI SECTION ------------------------>
		<section class="--kontak-section">
			<div class="container my-5">
				<div class="row d-flex justify-content-center align-items-center ps-2 ps-lg-0">
					<div class="col-lg-6">
						<h2 class="title-section">Hubungi Kami</h2>
						<div class="headline-paragraph text-black-50">
							<p>Alamat Kantor: {{ $profilecompany->alamat }}</p>
							<p>Workshop: {{ $profilecompany->workshop }}</p>
							<p>No. Handphone: <a href="https://wa.me/{{ $no_hp }}" class="text-decoration-none text-black-50" target="_blank">{{ $profilecompany->no_hp }}</a></p>
							<p>Web: <a href="http://{{ $profilecompany->web }}" class="text-decoration-none text-black-50">{{ $profilecompany->web }}</a></p>
							<p>Email: <a href="mailto:{{ $profilecompany->email }}" class="text-decoration-none text-black-50">{{ $profilecompany->email }}</a></p>
						</div>
					</div>
					<div class="col-lg-6 headline-paragraph mt-5 mt-lg-0">
						<p><i class="fa fa-map-marker" aria-hidden="true"></i></p>
						<iframe
							src="{{ $profilecompany->link_map }}"
							width="100%"
							height="400"
							style="border: 0"
							allowfullscreen=""
							loading="lazy"
						></iframe>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END KONTAK KAMI SECTION ------------------------>
@endsection
