@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            KAMPUS DAN JURUSAN
                        </p>
                        <h1 class="header">
                            Cari<span class="text-purple"> Jurusan</span> dan<span class="text-purple"> Kampus</span><br> Terbaikmu bersama <br><span class="text-purple"> E-Kampus</span>
                        </h1>
                        <!-- <p class="support">
                Yuk mulai konsultasi aja dengan kami dan kamu akan tahu bakat dan minat mu sekarang juga!
              </p> -->

                        <!-- <div class="col-lg-10 col-12">
                            <form action="#" class="basic-form">
                                <div class="mb-4">
                                    <input type="search" class="form-control" placeholder="Cari kampus atau jurusan">
                                    <button type="submit"><img src="{{ asset('images/search.png') }}"></button>                                
                                </div>
                        </div> -->
                        <div class="search-box">
                            <input class="search-txt" type="text" name="" placeholder="Cari kampus atau jurusan">
                            <a class="search-btn" href="#">
                                <img src="{{ asset('images/search.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{ asset('images/e-kampus.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kampusrekomendasi">
    <!-- Rekomendasi Kampus -->
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <h2 class="primary-header">
                    Kampus Rekomendasi Kami 
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <div class="dark">
                                <img src="{{ asset('images/itb.jpg') }}" class="background" alt="">
                            </div>
                            <div class="user">
                                <img src="{{ asset('images/logoitb.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Institut Teknologi Bandung
                                    </h4>
                                </div>
                            </div>
                            <p class="message">
                                Institut Teknologi Bandung merupakan kampus impian bagi hampir semua pelajar di Indonesia, terutama yang ingin melanjutkan pendidikan ... </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/ui.jpg') }}" class="background" alt="">
                            <div class="user">
                                <img src="{{ asset('images/logoui.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Universitas Indonesia
                                    </h4>
                                </div>
                            </div>
                            <p class="message">
                                Sejarah Universitas Indonesia dimulai dari tahun 1849, saat Pemerintah Kolonial Belanda membangun sebuah sekolah tinggi ilmu kesehatan. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/unair.jpg') }}" alt="" class="background">
                            <div class="user">
                                <img src="{{ asset('images/logounair.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Universitas Airlangga
                                    </h4>
                                </div>
                            </div>
                            <p class="message">
                                Kampus negeri ini memiliki sebuah nilai sejarah yang otentik, terutama dari segi pendiriannya. Bagaimana tidak, kampus yang berada di ... </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <a href="{{route('unnes')}}" class="tanpagaris">
                            <div class="item">
                                <img src="{{ asset('images/unnes.jpg') }}" class="background" alt="">
                                <div class="user">
                                    <img src="{{ asset('images/logounnes.png') }}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Universitas Negeri Semarang
                                        </h4>
                                    </div>
                                </div>
                                <p class="message">
                                    Universitas Negeri Semarang (UNNES) memiliki visi menjadi universitas berwawasan konservasi dan bereputasi Internasional. </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left pb-70">
            <div class="col-lg-3 col-12 header-wrap">
                <h4 class="lihatsemua">
                    <a href="#">Lihat Semua</a>
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="jurusanrekomendasi">
    <!-- Rekomendasi Jurusan -->
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <h2 class="primary-header">
                    Jurusan Rekomendasi Kami
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/si.jpg') }}" class="background" alt="">
                            <div class="user">
                                <img src="{{ asset('images/pc.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Sistem Informasi
                                    </h4>
                                </div>
                            </div>
                            <p class="message">
                                Jurusan Sistem Informasi adalah bidang keilmuan yang mengga- bungkan ilmu komputer dengan bisnis dan manajemen. Di prodi ini kamu akan belajar ... </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/ti.jpg') }}" class="background" alt="">
                            <div class="user">
                                <img src="{{ asset('images/pc.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Teknik Informatika
                                    </h4>
                                </div>
                            </div>
                            <p class="message">
                                Teknik Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani ...</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/doktor.jpg') }}" alt="" class="background">
                            <div class="user">
                                <img src="{{ asset('images/chem.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Kedokteran
                                    </h4>
                                </div>
                            </div>
                            <p class="message">
                                Profesi ini memang jadi profesi impian banyak orang meskipun dikenal dengan pekerjaan yang berat dan pendidikan yang terbilang lama. Dokter ...</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/perawat.jpg') }}" class="background" alt="">
                            <div class="user">
                                <img src="{{ asset('images/chem.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Keperawatan
                                    </h4>
                                </div>
                            </div>
                            <p class="message">
                                Perawat adalah seseorang yang bertugas memberikan asuhan pada individu, keluarga, juga kelompok dalam keadaan sakit maupun sehat. Secara umum ...</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row text-left pb-70">
            <div class="col-lg-3 col-12 header-wrap">
                <h4 class="lihatsemua">
                    <a href="#">Lihat Semua</a>
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="kotarekomendasi">
    <!-- Rekomendasi Kota -->
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <h2 class="primary-header">
                    Kota Rekomendasi Kami
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/medan.jpg') }}" class="background" alt="">
                            <div class="user2">
                                <div class="info2">
                                    <h6 class="country2">
                                        Indonesia
                                    </h6>
                                    <h4 class="name2">
                                        Medan
                                    </h4>
                                </div>
                            </div>
                            <div class="user">
                                <div class="info">
                                    <h6 class="country">
                                        Indonesia
                                    </h6>
                                    <h4 class="name">
                                        Medan
                                    </h4>
                                </div>
                                <p class="message">
                                    Pusat ekonomi terbesar di Sumatera, kuliah di kampus unggulan Kota Medan bisa menjadi pilihan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/jakarta.jpg') }}" class="background" alt="">
                            <div class="user2">
                                <div class="info2">
                                    <h6 class="country2">
                                        Indonesia
                                    </h6>
                                    <h4 class="name2">
                                        Jakarta
                                    </h4>
                                </div>
                            </div>
                            <div class="user">
                                <div class="info">
                                    <h6 class="country">
                                        Indonesia
                                    </h6>
                                    <h4 class="name">
                                        Jakarta
                                    </h4>
                                </div>
                                <p class="message">
                                    Kuliah di kampus kenamaan ibu kota dengan fasilitas lengkap dan kesempatan magang di perusahaan.. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/surabaya.jpg') }}" class="background" alt="">
                            <div class="user2">
                                <div class="info2">
                                    <h6 class="country2">
                                        Indonesia
                                    </h6>
                                    <h4 class="name2">
                                        Surabaya
                                    </h4>
                                </div>
                            </div>
                            <div class="user">
                                <div class="info">
                                    <h6 class="country">
                                        Indonesia
                                    </h6>
                                    <h4 class="name">
                                        Surabaya
                                    </h4>
                                </div>
                                <p class="message">
                                    Kota terbesar kedua di Indonesia dengan semangat pahlawan. Cek untuk lihat daftar kampus di kota ini. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="item">
                            <img src="{{ asset('images/bandung.jpg') }}" class="background" alt="">
                            <div class="user2">
                                <div class="info2">
                                    <h6 class="country2">
                                        Indonesia
                                    </h6>
                                    <h4 class="name2">
                                        Bandung
                                    </h4>
                                </div>
                            </div>
                            <div class="user">
                                <div class="info">
                                    <h6 class="country">
                                        Indonesia
                                    </h6>
                                    <h4 class="name">
                                        Bandung
                                    </h4>
                                </div>
                                <p class="message">
                                    Kota pelajar dengan suasana asri, temukan deretan kampus terbaik Indonesia di kota ini. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-left pb-70">
            <div class="col-lg-3 col-12 header-wrap">
                <h4 class="lihatsemua">
                    <a href="#">Lihat Semua</a>
                </h4>
            </div>
        </div>
    </div>


</section>

@endsection