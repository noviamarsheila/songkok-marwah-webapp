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
						<img src="images/faq/faq-image-freepik.png" alt="Image FAQ from freepik" class="img-fluid" width="550" />
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
						<div class="accordion" id="accordionExample">
                            @foreach ($faqs as $faq)
							<div class="accordion-item">
								<h2 class="accordion-header" id="{{ $faq->heading }}">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq->target }}" aria-expanded="false" aria-controls="{{ $faq->target }}">
										{{ $loop->iteration }} . {{ $faq->pertanyaan }}
									</button>
								</h2>
								<div id="{{ $faq->target }}" class="accordion-collapse collapse" aria-labelledby="{{ $faq->heading }}" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										{{ $faq->jawaban }}
									</div>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END FAQ ------------------------>
@endsection
