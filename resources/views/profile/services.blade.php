@extends('profile.layouts.main')

@section('content')
    <!------------------- LAYANAN KAMI ------------------------>
		<section id="menu--layanan">
			<div class="container">
				<h2 class="title-section text-center mt-4 mb-2 mx-auto">Layanan Kami</h2>
				<p class="headline-paragraph text-black-50 text-center mx-auto" style="max-width: 800px">
					Kami berusaha memberikan pelayanan terbaik kepada mitra maupun konsumen dengan berbagai inovasi dan solusi guna memperluas usaha dan kepuasan konsumen.
				</p>
				<!-- baris kedua -->
				<div class="row mt-5 mb-5 gap-3 gap-lg-0 gy-0 gy-lg-4">
					<!-- kotak 1 -->
                    @foreach ($layanan as $data)
                        <div class="col-lg-6">
                            <div class="--box-layanan shadow-sm border border-primary d-flex justify-content-between align-items-center">
                                <img src="/images/layanan/{{ $data->image }}" alt="" width="130" />
                                <div class="ms-3">
                                    <h3>{{ $data->name }}</h3>
                                    <p class="headline-paragraph text-black-50">{{ $data->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
		</section>
		<!------------------- END LAYANAN KAMI ------------------------>

		<!-------------------  PELANGGAN ------------------------>
		<section class="--pelanggan-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<img src="/images/layanan/image-pelanggan.png" class="img-fluid" alt="image pelanggan" />
					</div>
					<div class="col-lg-6 p-4">
						<h2 class="title-section">Pelanggan</h2>
						<p class="headline-paragraph text-black-50">Distribusi Songkok Marwah telah tersebar didaerah Jawa Timur dan Jawa Tengah dan akan berkembang ke daerah lain.</p>
						<div>
							<span class="d-flex">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="rgb(77 124 15)" class="bi bi-check2-circle mt-1 me-2" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
								</svg>
								<p class="headline-paragraph text-black-50">Toko, Agen, dan Grosir</p>
							</span>
							<span class="d-flex">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="rgb(77 124 15)" class="bi bi-check2-circle mt-1 me-2" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
								</svg>
								<p class="headline-paragraph text-black-50">Sekolah dan Pondok Pesantren</p>
							</span>
							<span class="d-flex">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="rgb(77 124 15)" class="bi bi-check2-circle mt-1 me-2" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
								</svg>
								<p class="headline-paragraph text-black-50">Pesanan Khusus</p>
							</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-------------------  END PELANGGAN ------------------------>

		<!-------------------  PRODUCTS ------------------------>
		<div class="container mt-5 products">
			<h2 class="title-section text-center mt-4 mb-2 mx-auto">Produk</h2>
			<p class="headline-paragraph text-black-50 text-center mx-auto" style="max-width: 800px">
				Kami mempersembahkan rangkaian produk berkualitas tinggi dari PT Inti Marwah Industri, ahli dalam produksi songkok berkualitas tinggi. Berikut beberapa produk kami:
			</p>
			<div class="row mt-5 mx-auto g-4 d-flex justify-content-center row-cols-lg-4 row-cols-md-3 row-cols-2">
				@foreach ($products as $product)
                <div class="col --box-produk">
					<img src="/images/products/{{ $product->image }}" class="img-fluid" alt="{{ $product->slug }}" />
				</div>
                @endforeach
			</div>
		</div>
		<!------------------- END PRODUCTS ------------------------>

@endsection
