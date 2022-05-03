@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-11 col-12">
          <div class="row">
            <div class="col-lg-6 col-12 copywriting">
              <p class="story">
                MULAI DENGAN KAMI
              </p>
              <h1 class="header">
                Kamu <span class="text-purple">Bingung </span>dan<span class="text-purple"> Takut</span><br> Salah Jurusan?
              </h1>
              <p class="support">
                Yuk mulai konsultasi aja dengan kami dan kamu akan tahu bakat dan minat mu sekarang juga!
              </p>
              <p class="cta">
                <a href="#" class="btn btn-master btn-primary">
                  Konsul Sekarang
                </a>
              </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
              <a href="#">
                <img src="{{ asset('images/e-belajar.png') }}" class="img-fluid" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row brands">
        <div class="col-lg-12 col-12 text-center">
          <img src="{{ asset('images/merek.png') }}" alt="">
        </div>
      </div>
    </div>
  </section>


  <section class="benefits">
    <div class="container">
      <div class="row text-center pb-70">
        <div class="col-lg-12 col-12 header-wrap">
          <p class="story">
            E-SISWA UNTUK INDONESIA
          </p>
          <h2 class="primary-header">
            Kenapa Harus E-Siswa
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-12">
          <div class="item-benefit">
            <img src="{{ asset('images/ic_globe.png') }}" class="icon" alt="">
            <h3 class="title">
              Mudah dan Cepat
            </h3>
            <p class="support">
              Akses banyak materi hanya dengan <br> 1 klik.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-12">
          <div class="item-benefit">
            <img src="{{ asset('images/ic_globe-1.png') }}" class="icon" alt="">
            <h3 class="title">
              Akses Gratis
            </h3>
            <p class="support">
              Kamu dapat menikmati semua <br> fasilitas e-siswa dengan Rp 0.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-12">
          <div class="item-benefit">
            <img src="{{ asset('images/ic_globe-2.png') }}" class="icon" alt="">
            <h3 class="title">
              Tes Minat
            </h3>
            <p class="support">
              Kami menjamin kamu mendapatkan <br> jurusan yang sesuai.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-12">
          <div class="item-benefit">
            <img src="{{ asset('images/ic_globe-3.png') }}" class="icon" alt="">
            <h3 class="title">
              Informasi
            </h3>
            <p class="support">
              Berbagai Infomasi jurusan & kampus <br> yang lengkap di e-siswa.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="steps">
    <div class="container">
      <div class="row item-step pb-60">
        <div class="col-lg-6 col-14 text-center">
          <img src="{{ asset('images/spanduk.png') }}" class="cover" alt="">
        </div>
        <div class="col-lg-6 col-12 text-left copywriting">
          <p class="story">
            BELAJAR MUDAH
          </p>
          <h2 class="primary-header">
            E-Belajar
          </h2>
          <p class="support">
            Belajar banyak materi tanpa ribet hanya dengan 1 klik aja <br> anda dapat mengakses berbagai materi yang anda maukan.
          </p>
          <p class="mt-5">
            <a href="#" class="btn btn-master btn-secondary me-3">
              Selanjutnya
            </a>
          </p>
        </div>
      </div>
      <div class="row item-step pb-60">
        <div class="col-lg-6 col-12 text-left copywriting pl-150">
          <p class="story">
            KAMPUS & JURUSAN
          </p>
          <h2 class="primary-header">
            E-Kampus
          </h2>
          <p class="support">
            Panduan terbaik memilih kampus untuk masa depan. <br> Dapatkan info kampus terlengkap dan berkualitas di sini!
          </p>
          <p class="mt-5">
            <a href="#" class="btn btn-master btn-secondary me-3">
              Selanjutnya
            </a>
          </p>
        </div>
        <div class="col-lg-6 col-12 text-center">
          <img src="{{ asset('images/e-kampus.png') }}" class="cover" alt="">
        </div>

      </div>
      <div class="row item-step">
        <div class="col-lg-6 col-12 text-center">
          <img src="{{ asset('images/e-konsultasi.png') }}" class="cover" alt="">
        </div>
        <div class="col-lg-6 col-12 text-left copywriting">
          <p class="story">
            MINAT BAKAT
          </p>
          <h2 class="primary-header">
            E-Konsultasi
          </h2>
          <p class="support">
            Mencari tahu minat dan bakat dengan mudah <br> kamu dapat mengetahui beberapa jurusan yang sesuai <br> dengan kamu
          </p>
          <p class="mt-5">
            <a href="#" class="btn btn-master btn-secondary me-3">
              Selanjutnya
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        GOOD INVESTMENT
                    </p>
                    <h2 class="primary-header text-white">
                        Start Your Journey
                    </h2>
                    <p class="support">
                        Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                            View Syllabus
                        </a>
                    </p>
                </div> -->
  <!-- <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-gila">
                                <p class="story text-center">
                                    GILA BELAJAR
                                </p>
                                <h1 class="price text-center">
                                    $280K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Pro Techstack Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        iMac Pro 2021 & Display
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Premium Design Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Website Builder
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="#" class="btn btn-master btn-primary w-100 mt-3">
                                        Take This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    BARU MULAI
                                </p>
                                <h1 class="price text-center">
                                    $140K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="#" class="btn btn-master btn-secondary w-100 mt-3">
                                        Start With This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-70">
                <div class="col-lg-12 col-12 text-center">
                    <img src="/assets/images/brands.png" height="30" alt="">
                </div>
            </div>
        </div>
    </section> -->

  <section class="testimonials">
    <div class="container">
      <div class="row text-center pb-70">
        <div class="col-lg-12 col-12 header-wrap">
          <p class="story">
            PELAJAR SUKSES
          </p>
          <h2 class="primary-header">
            Apa Kata Mereka
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
          <div class="row">
            <div class="col-lg-4 col-12">
              <div class="item-review">
                <img src="{{ asset('images/stars.svg') }}" alt="">
                <p class="message">
                  Ini sangat luar biasa, saya bisa mengetahui jurusan yang sesuai dengan bakat saya dengan mudah. Keren banget!!!
                </p>
                <div class="user">
                  <img src="{{ asset('images/johan.png') }}" class="photo" alt="">
                  <div class="info">
                    <h4 class="name">
                      Johan Febriansyah
                    </h4>
                    <p class="role">
                      Mahasiswa UNNES
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="item-review">
                <img src="{{ asset('images/stars.svg') }}" alt="">
                <p class="message">
                  e-siswa sangat membantu saya menghadapi UTBK dan akhirnya saya diterima di kampus favorit. Terima kasih e-siswa.
                </p>
                <div class="user">
                  <img src="{{ asset('images/taufiq.png') }}" class="photo" alt="">
                  <div class="info">
                    <h4 class="name">
                      Ahmad Taufiq
                    </h4>
                    <p class="role">
                      Mahasiswa UNNES
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="item-review">
                <img src="{{ asset('images/stars.svg') }}" alt="">
                <p class="message">
                  Di e-siswa ini sangat lengkap informasinya untuk mencari kampus dan jurusan yang kita maukan. Mantap banget e-siswa!
                </p>
                <div class="user">
                  <img src="{{ asset('images/mala.png') }}" class="photo" alt="">
                  <div class="info">
                    <h4 class="name">
                      Ahlam Umniyatur
                    </h4>
                    <p class="role">
                      Mahasiswa UNNES
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="wrapper">
        <div class="footer-widget">
          <a href="#">
            <img src="{{ asset('images/logo1.png') }}" class="logo" />
          </a>
          <p class="desc">
            E-Siswa adalah sebuah platform website yang membantu lulusan sekolah untuk melanjutkan studi ke perguruan tinggi yang sesuai dengan minat siswa tersebut.
          </p>
          <h6>Ikuti Kami</h6>
          <ul class="socials">
            <li>
              <a href="#">
                <i class="fab fa-facebook-f">
                  <img src="{{ asset('images/fb.png') }}" class="socialogo" />
                </i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-facebook-f">
                  <img src="{{ asset('images/ig.png') }}" class="socialogo" />
                </i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-twitter">
                  <img src="{{ asset('images/yt.png') }}" class="socialogo" />
                </i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-instagram">
                  <img src="{{ asset('images/tiktok.png') }}" class="socialogo" />
                </i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-linkedin-in">
                  <img src="{{ asset('images/linkedin.png') }}" class="socialogo" />
                </i>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-widget">
          <h6>Kontak Kami</h6>
          <ul class="links">
            <li><a href="#">+62 738 2030223</a></li>
            <li><a href="#">info@esiswa.id</a></li>
            <li><a href="#">Grand Slipi Tower Lt. 42
                Jl. S. Parman Kav 22-24
                Jakarta Barat
              </a></li>
          </ul>
        </div>
        <div class="footer-widget">
          <h6>Layanan</h6>
          <ul class="links">
            <li><a href="#">E-Belajar</a></li>
            <li><a href="#">E-Kampus</a></li>
            <li><a href="#">E-Konsultasi</a></li>
          </ul>
        </div>
        <div class="footer-widget">
          <h6>Informasi</h6>
          <ul class="links">
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Syarat dan Ketentuan</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-lg-12 col-12">
          <p>
            All Rights Reserved. Copyright E-Siswa Indonesia.
          </p>
        </div>
      </div>
    </div>
  </footer>
@endsection