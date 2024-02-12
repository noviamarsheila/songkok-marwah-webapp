@extends('profile.layouts.main')

@section('content')
    <!------------------- FAQ INTRO SECTION ------------------------>
		<section>
			<div class="container my-3">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6 ps-3">
						<h2 class="title-section">FAQ</h2>
						<p class="headline-paragraph text-black-50">
							Selamat datang di Halaman Tanya Jawab (FAQ) PT Inti Marwah Industri, tempat yang tepat untuk mendapatkan informasi rinci tentang produk dan layanan kami. Berikut adalah beberapa pertanyaan umum yang sering diajukan oleh
							pelanggan kami berserta jawabannya. Jika Anda memiliki pertanyaan tambahan, jangan ragu untuk menghubungi tim layanan pelanggan kami.
						</p>
					</div>
					<div class="col-lg-6 text-center">
						<img src="./img/faq-image-freepik.png" alt="Image FAQ from freepik" class="img-fluid" width="550" />
						<p>Image by <a href="https://www.freepik.com/free-vector/flat-people-asking-questions_13561931.htm#query=faq%20illustration&position=7&from_view=search&track=ais&uuid=d2eb6a44-4118-4be6-84ae-26744068204a">Freepik</a></p>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END FAQ INTRO SECTION ------------------------>

		<!------------------- FAQ ------------------------>
		<section>
			<div class="container my-5">
				<h3 class="title-section mb-4 text-black fs-3 text-center"><span class="text-primary">GENERAL</span> QUESTIONS</h3>

				<!-- Accordion  -->
				<div class="row d-flex justify-content-center">
					<div class="col-lg-10">
						<!-- start -->
						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										1. Apa yang membuat PT Inti Marwah Industri unik dalam produksi songkok?
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										PT Inti Marwah Industri bangga menjadi pionir dalam industri pembuatan songkok. Kami menggabungkan keahlian tradisional dengan teknologi modern untuk menciptakan produk berkualitas tinggi yang memadukan keindahan dan
										kekuatan.
									</div>
								</div>
							</div>
							<!--  -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										2. Bagaimana cara memesan songkok dari PT Inti Marwah Industri?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">Anda dapat memesan songkok kami melalui situs web resmi kami atau menghubungi tim layanan pelanggan kami. Kami juga menyediakan opsi kustomisasi untuk memenuhi kebutuhan spesifik Anda.</div>
								</div>
							</div>
							<!--  -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										3. Apakah PT Inti Marwah Industri menerima pesanan grosir?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">Ya, kami menerima pesanan grosir untuk keperluan bisnis, pernikahan, atau acara khusus lainnya. Silakan hubungi tim penjualan kami untuk informasi lebih lanjut dan penawaran khusus.</div>
								</div>
							</div>
							<!--  -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">4. Bagaimana cara melacak pesanan saya?</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Setelah pesanan Anda dikonfirmasi, kami akan memberikan nomor pelacakan yang dapat Anda gunakan untuk melacak status pengiriman. Anda juga dapat menghubungi tim layanan pelanggan kami untuk bantuan lebih lanjut.
									</div>
								</div>
							</div>
							<!--  -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFive">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										5. Apakah PT Inti Marwah Industri juga memproduksi aksesori lain selain songkok?
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
									<div class="accordion-body">Saat ini, fokus utama kami adalah pada produksi songkok. Namun, kami terbuka untuk pertimbangan kolaborasi atau permintaan khusus. Silakan hubungi kami untuk pembicaraan lebih lanjut.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END FAQ ------------------------>
@endsection
