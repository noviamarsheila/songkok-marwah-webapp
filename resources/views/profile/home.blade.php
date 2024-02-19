@extends('profile.layouts.main')

@section('content')
    <!------------------- CAROUSEL ------------------------>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/beranda/image1.png" class="d-block w-100" alt="..." />
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image-pelanggan.png" class="d-block w-100" alt="..." />
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image2.png" class="d-block w-100" alt="..." />
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<!------------------- END CAROUSEL ------------------------>

		<!------------------- JUMBOTRON DESC PROFILE ------------------------>
		<div class="container my-5 py-md-5">
			<div class="row mt-md-5 d-flex justify-content-center">
				<div class="col-lg-7 text-center">
					<h1 class="headline-slogan">Songkok Exclusive, Murah Berkualitas</h1>
					<p class="headline-paragraph text-black-50 pt-2 px-2">
						Menawarkan keindahan dan keunggulan tanpa harus menguras kantong. Disini, kami membawa sentuhan eksklusifitas pada harga yang terjangkau, menciptakan pengalaman berkelas yang dapat dinikmati oleh semua kalangan.
					</p>
					<div class="d-flex justify-content-center">
						<a href="#r-more" class="read-more text-decoration-none text-black border w-auto py-2 px-5">Read More</a>
					</div>
				</div>
			</div>
		</div>
		<!------------------- END JUMBOTRON DESC PROFILE ------------------------>
		<hr class="invisible" id="r-more" />

		<!------------------- BERANDA THIRD SECTION  ------------------------>
		<div class="container mb-5">
			<div class="row d-flex justify-content-between align-items-center">
				<div class="col-lg-6">
					<h2 class="title-section mx-3">Produksi Berkualitas<br />Tinggi</h2>
					<p class="headline-paragraph text-black-50 mx-3">
						Songkok Marwah berkomitmen mengutamakan kualitas, nyaman digunakan dan memiliki daya saing dipasaran. Menggunakan bahan baku bludru pilihan dari Korea dan bahan pendukung pilihan, sisi dalam songkok bordir yang memiliki estetika
						tinggi dan karya sendiri dengan kualitas bordir rapat dan hasil yang presisi Diproses oleh tangan-tangan terampil dan profesional, serta memberdayakan masyarakat sekitar.
					</p>
				</div>
				<div class="col-lg-6 mt-4 mt-lg-0">
					<img src="images/beranda/image1.png" alt="image produksi" style="border-radius: 15px" class="img-fluid" />
				</div>
			</div>
		</div>
		<!------------------- END BERANDA THIRD SECTION  ------------------------>

		<!------------------- BERANDA FOURTH SECTION  ------------------------>
		<section class="--section-page">
			<div class="container mt-5">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6">
						<img src="images/beranda/image2.png" alt="image profile marwah" class="img-fluid" />
					</div>
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							<h2 class="title-section">Kustomisasi Tanpa Batas</h2>
							<p class="headline-paragraph text-black-50">Songkok menjadi lebih dari sekadar aksesori. Dengan layanan kustomisasi kami, Anda dapat mengungkapkan kepribadian unik Anda melalui desain songkok yang dibuat khusus untuk Anda.</p>
						</div>
						<div class="row gap-2 mb-2">
							<div class="col-lg-6 shadow-sm --box-4">
								<h4>Warna</h4>
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-palette" viewBox="0 0 16 16">
										<path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
										<path
											d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8m-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7"
										/>
									</svg>
								</span>
							</div>
							<div class="col-lg-6 shadow-sm --box-4">
								<h4>Motif</h4>
								<span class="mb-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-patch-question" viewBox="0 0 16 16">
										<path
											d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745"
										/>
										<path
											d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"
										/>
										<path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0" />
									</svg>
								</span>
							</div>
						</div>
						<div class="row gap-2">
							<div class="col-lg-6 shadow-sm --box-4">
								<h4>Size</h4>
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-rulers" viewBox="0 0 16 16">
										<path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1z" />
									</svg>
								</span>
							</div>
							<div class="col-lg-6 shadow-sm --box-4">
								<h4>Grosir</h4>
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-boxes" viewBox="0 0 16 16">
										<path
											d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"
										/>
									</svg>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END BERANDA FOURTH SECTION  ------------------------>

		<!------------------- KEUNGGULAN KAMI SECTION ------------------------>
		<section>
			<div class="container mb-5">
				<h2 class="title-section mx-3 text-center">Keunggulan Kami</h2>
				<div class="row mb-5">
					<div class="col-lg-4">
						<div class="py-3 px-4 --box-advantage">
							<div class="d-flex justify-content-start align-items-center">
								<img src="images/beranda/quality-control.png" alt="" />
								<h4>Kualitas Unggul</h4>
							</div>
							<p class="text-black-50 headline-paragraph">Kami hanya menggunakan bahan-bahan berkualitas tinggi untuk memastikan kepuasan pelanggan.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="py-3 px-4 --box-advantage">
							<div class="d-flex justify-content-start align-items-center">
								<img src="images/beranda/design-tool.png" alt="" />
								<h4>Desain Kreatif</h4>
							</div>
							<p class="text-black-50 headline-paragraph">Tim desain kami terus berinovasi untuk memberikan produk yang sesuai dengan tren terkini.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="py-3 px-4 --box-advantage">
							<div class="d-flex justify-content-start align-items-center">
								<img src="images/beranda/sewing-machine.png" alt="" />
								<h4>Pengrajin Berpengalaman</h4>
							</div>
							<p class="text-black-50 headline-paragraph">Pengrajin kami adalah para ahli dengan keahlian dan dedikasi tinggi dalam setiap langkah produksi.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END KEUNGGULAN KAMI SECTION ------------------------>
@endsection
