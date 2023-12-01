@extends('layouts.main')

@section('content')
    <!-- ======= Services Section ======= -->

    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Jasa Perbaikan Website (Redesign / Codingan)</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <div data-aos="fade-up" data-aos-delay="400">

                        <p>Bagi Anda yang sudah memiliki website tetapi tampilan website tersebut kurang menarik,
                            berantakan, atau ingin menambah fitur-fitur lain seperti random image atau slideshow agar
                            kelihatan lebih attractive, jasa perbaikan website siap membantu memperbaiki website dengan jasa
                            redesign website untuk menambah fitur lain pada website Anda, agar kelihatan lebih menarik.
                        </p>
                        <p>
                            Jadi, jika Anda memiliki website butuh perbaikan karena error ataupun dikarenakan Anda belum
                            puas dengan website tersebut, Tasaka Software siap untuk membantu Anda, memperbaiki website full
                            script ataupun CMS.</p>

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('img/repair.jpg') }}" class="img-fluid rounded-2 animated" alt="">
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Jasa Perbaikan Codingan Website</h2>
                <p>Apa saja yang perlu diperhatikan atau bagaimana tahapan memesan <span class="text-primary">Jasa Perbaikan
                        Website</span></p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-comment-check"></i></div>
                        <p class="description">Klien menginformasikkan alamat website saat akan diperbaiki, serta
                            menerangkan apa yang perlu diperbaiki.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-money-withdraw"></i></div>
                        <p class="description">Jasa Perbaikan Website PHP MySQL akan melakukan analisis dan perkiraan biaya
                            Error Handling dan mendiskusikan tentang apa saja yang perlu untuk diperbaiki.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bxs-data"></i></div>
                        <p class="description">Klien mengirimkan data lengkap Account Cpanel Hosting dan tim Nawadwipa bisa
                            melakukan pengerjaan Error Handling.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-server"></i></div>
                        <p class="description">Jika pengerjaan suatu website sudah selesai dikerjakan, maka user berhak
                            mengganti password account cpanel.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>Harga</h2>
                <p>Paket Hemat untuk Semua Anggaran</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                        <h3>Perbaikan Kecil</h3>
                        <h4><sup>Rp</sup>450.000 </h4>
                        <ul>
                            <li>1 - 2 hari pengerjaan</li>
                            <li>Perbaikan menu dan penambahan plugins</li>
                            <li>Perbaikan minor error lainnya</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Perbaikan Tingkat Menengah</h3>
                        <h4><sup>Rp</sup>750.000 </h4>
                        <ul>
                            <li>2 - 4 hari pengerjaan</li>
                            <li>Perbaikan error database connections</li>
                            <li>Koneksi dengan server dan hosting</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                        <h3>Perbaikan Tingkat Sulit</h3>
                        <h4><sup>Rp</sup>1.200.000 </h4>
                        <ul>
                            <li>Disesuaikan dengan tingkat kesulitan</li>
                            <li>Perbaikan Page Speed</li>
                            <li>Perbaikan kode pemrograman</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->
@endsection
