@extends('frontend.layouts.app')
@yield('title')
@section('content')
<main>
    <article>

        <!-- #HERO-->
        <section class="hero" id="home" aria-label="hero"
            style="background-image: url('{{ asset('frontend/assets/images/hero-bg.jpg') }}')">
            <div class="container">

                <div class="hero-content">

                    <p class="section-subtitle">Rasakan Keistimewaan Setiap Gigitan</p>

                    <h2 class="h1 hero-title">Keripik Talas: Cemilan Lezat dan Sehat</h2>

                    <p class="hero-text">
                        Temukan kenikmatan dan manfaat dari keripik talas kami, diproses dengan teknik inovatif untuk
                        menghasilkan rasa yang tak terlupakan.
                    </p>

                    <a href="#" class="btn btn-primary">
                        <span class="span">Mulai Nikmati Sekarang</span>

                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                </div>

                <figure class="hero-banner">

                    <img src="{{ asset('frontend/assets/images/hero-banner.png') }}" width="500" height="500"
                        loading="lazy" alt="hero image" class="w-100">

                    <img src="{{ asset('frontend/assets/images/hero-abs-1.png') }}" width="318" height="352"
                        loading="lazy" aria-hidden="true" class="abs-img abs-img-1">

                    <img src="{{ asset('frontend/assets/images/hero-abs-2.png') }}" width="160" height="160"
                        loading="lazy" aria-hidden="true" class="abs-img abs-img-2">

                </figure>

            </div>
        </section>

        <!-- #ABOUT-->
        <section class="section about" id="about" aria-label="about">
            <div class="container">

                <figure class="about-banner">

                    <img src="{{ asset('frontend/assets/images/about-banner.jpg') }}" width="450" height="590"
                        loading="lazy" alt="about banner" class="w-100 about-img">

                    <img src="{{ asset('frontend/assets/images/about-abs-1.jpg') }}" width="188" height="242"
                        loading="lazy" aria-hidden="true" class="abs-img abs-img-1">

                    <img src="{{ asset('frontend/assets/images/about-abs-2.jpg') }}" width="150" height="200"
                        loading="lazy" aria-hidden="true" class="abs-img abs-img-2">

                </figure>

                <div class="about-content">

                    <h2 class="h2 section-title">Olahan Makanan Alami Berkualitas</h2>

                    <ul class="about-list">

                        <li class="about-item">

                            <div class="item-icon item-icon-1">
                                <img src="{{ asset('frontend/assets/images/about-icon-1.png') }}" width="30" height="30"
                                    loading="lazy" aria-hidden="true">
                            </div>

                            <div>
                                <h3 class="h3 item-title">Produk Alami</h3>

                                <p class="item-text">
                                    Menyediakan berbagai olahan makanan dari bahan-bahan alami, termasuk keripik dan
                                    biji ketapang.
                                </p>
                            </div>

                        </li>

                        <li class="about-item">

                            <div class="item-icon item-icon-2">
                                <img src="{{ asset('frontend/assets/images/about-icon-2.png') }}" width="30" height="30"
                                    loading="lazy" aria-hidden="true">
                            </div>

                            <div>
                                <h3 class="h3 item-title">Pesanan Khusus</h3>

                                <p class="item-text">
                                    Menerima permintaan khusus dari pelanggan untuk produk olahan yang disesuaikan.
                                </p>
                            </div>

                        </li>

                        <li class="about-item">

                            <div class="item-icon item-icon-3">
                                <img src="{{ asset('frontend/assets/images/about-icon-3.png') }}" width="30" height="30"
                                    loading="lazy" aria-hidden="true">
                            </div>

                            <div>
                                <h3 class="h3 item-title">Kualitas Terjamin</h3>

                                <p class="item-text">
                                    Menjamin kualitas dan keaslian setiap produk yang ditawarkan, memberikan pilihan
                                    makanan lezat dan sehat sesuai kebutuhan Anda.
                                </p>
                            </div>

                        </li>

                    </ul>

                    <a href="#" class="btn btn-primary">
                        <span class="span">Ketahui Lebih Lanjut</span>

                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                </div>

            </div>
        </section>

        <!--- #PRODUK-->
        <section class="section course" id="courses" aria-label="course"
            style="background-image: url('{{ asset('frontend/assets/images/course-bg.jpg') }}')">
            <div class="container">
                <h2 class="h2 section-title">Produk Terlaris</h2>
                <ul class="grid-list">
                    <li class="course-column">
                        <div class="course-card">
                            <figure class="card-banner">
                                <img src="{{ asset('frontend/assets/images/course-1.jpg') }}" width="370" height="270"
                                    loading="lazy" alt="Keripik Talas" class="img-cover">
                            </figure>
                            <div class="card-actions">
                                <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                    <ion-icon name="heart"></ion-icon>
                                </button>
                            </div>
                            <div class="card-content">
                                <ul class="card-meta-list">
                                    <li class="card-meta-item">
                                        <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>
                                        <span class="card-meta-text">Terjual 31</span>
                                    </li>
                                </ul>
                                <h3 class="h3"><a href="{{ route('produk.show', ['id' => 1]) }}"
                                        class="card-title">Keripik Talas</a></h3>
                                <!-- Tautkan ke halaman detail produk -->
                                <div class="rating-wrapper">
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <span class="rating-text">(18 Review)</span>
                                </div>
                                <div class="card-footer">
                                    <div class="card-price">
                                        <span class="span">Rp35.000</span>
                                        <del class="del">Rp40.000</del>
                                    </div>
                                    <div class="card-meta-item">
                                        <ion-icon name="fast-food-outline" aria-hidden="true"></ion-icon>
                                        <span class="card-meta-text">Sisa 30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="course-column">
                        <div class="course-card">
                            <figure class="card-banner">
                                <img src="{{ asset('frontend/assets/images/course-3.jpg') }}" width="370" height="270"
                                    loading="lazy" alt="Biji Ketapang" class="img-cover">
                            </figure>
                            <div class="card-actions">
                                <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                    <ion-icon name="heart"></ion-icon>
                                </button>
                            </div>
                            <div class="card-content">
                                <ul class="card-meta-list">
                                    <li class="card-meta-item">
                                        <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>
                                        <span class="card-meta-text">Terjual 31</span>
                                    </li>
                                </ul>
                                <h3 class="h3"><a href="{{ route('produk.show', ['id' => 2]) }}" class="card-title">Biji
                                        Ketapang</a></h3> <!-- Tautkan ke halaman detail produk -->
                                <div class="rating-wrapper">
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <span class="rating-text">(18 Review)</span>
                                </div>
                                <div class="card-footer">
                                    <div class="card-price">
                                        <span class="span">Rp35.000</span>
                                        <del class="del">Rp40.000</del>
                                    </div>
                                    <div class="card-meta-item">
                                        <ion-icon name="fast-food-outline" aria-hidden="true"></ion-icon>
                                        <span class="card-meta-text">Sisa 30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="course-column">
                        <div class="course-card">
                            <figure class="card-banner">
                                <img src="{{ asset('frontend/assets/images/course-2.jpg') }}" width="370" height="270"
                                    loading="lazy" alt="Molen Pisang" class="img-cover">
                            </figure>
                            <div class="card-actions">
                                <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                    <ion-icon name="heart"></ion-icon>
                                </button>
                            </div>
                            <div class="card-content">
                                <ul class="card-meta-list">
                                    <li class="card-meta-item">
                                        <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>
                                        <span class="card-meta-text">Terjual 31</span>
                                    </li>
                                </ul>
                                <h3 class="h3"><a href="{{ route('produk.show', ['id' => 3]) }}"
                                        class="card-title">Molen Pisang</a></h3>
                                <!-- Tautkan ke halaman detail produk -->
                                <div class="rating-wrapper">
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                    <span class="rating-text">(18 Review)</span>
                                </div>
                                <div class="card-footer">
                                    <div class="card-price">
                                        <span class="span">Rp35.000</span>
                                        <del class="del">Rp40.000</del>
                                    </div>
                                    <div class="card-meta-item">
                                        <ion-icon name="fast-food-outline" aria-hidden="true"></ion-icon>
                                        <span class="card-meta-text">Sisa 30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>


            <a href="{{route('produk.frontend')}}" class="btn btn-primary">
                <span class="span">Lihat Semua Produk</span>

                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

            </div>
        </section>
    </article>
</main>

<!--- #BACK TO TOP-->
<a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="arrow-up"></ion-icon>
</a>
@endsection