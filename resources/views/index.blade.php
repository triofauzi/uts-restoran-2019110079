@extends('layouts.master')
@section('title', 'Index')
@section('content')

    <main>
        <article>

            <!--- #HERO-->

            <section class="hero" id="home" style="">
                <div class="container">
                    <div class="hero-content">
                        <p class="hero-subtitle">premiun steak house</p>

                        <h2 class="h1 hero-title">Supper delicious Steak in town!</h2>

                        <p class="hero-text">Steak house menggunakan daging dengan kualitas terbaik yang melalui proses
                            pemilihan oleh chef profesional.</p>
                    </div>
                </div>
            </section>



            <!--Home-->
            <section class="section section-divider  promo"style="background-image: url('./img/BG.jpg')" >

                <div class="container ">

                    <ul class="promo-list has-scrollbar">

                        <li class="promo-item">
                            <div class="promo-card">

                                <div class="card-icon">
                                </div>

                                <h3 class="h3 card-title">SERLOIN STEAK</h3>

                                <p class="card-text">
                                    Sirloin atau daging has luar diambil dari bagian bawah daging iga lebih keras dibandingkan tenderloin.
                                </p>

                                <div class="jumbotron" id="jumbotron">
                                    <img src="./img/PR5.jpg" class="rounded-circle img-thumbnail">
                                </div>

                            </div>
                        </li>

                        <li class="promo-item">
                            <div class="promo-card">

                                <div class="card-icon">
                                </div>

                                <h3 class="h3 card-title">TENDERLOIN STEAK</h3>

                                <p class="card-text">
                                    bagian daging yang diambil dari bagian dalam ke belakang badan sapi yang dekat dengan ekor.

                                </p>

                                <img src="./img/PR2.png" width="300" height="300" loading="lazy"
                                    alt="Soft Drinks" class="w-100 card-banner">

                            </div>
                        </li>

                        <li class="promo-item">
                            <div class="promo-card">

                                <div class="card-icon">
                                </div>

                                <h3 class="h3 card-title">T-bone</h3>

                                <p class="card-text">
                                   daging yang diambil dari punggung bagian dalam sapi sampai bawah hingga memotong tulang punggung.
                                </p>

                                <div class="jumbotron" id="jumbotron">
                                    <img src="./img/PR3.jpg" class="rounded-circle img-thumbnail">
                                </div>

                            </div>
                        </li>

                        <li class="promo-item">
                            <div class="promo-card">

                                <div class="card-icon">
                                </div>

                                <h3 class="h3 card-title">Rib-eye</h3>

                                <p class="card-text">
                                    atau yang biasa disebut fillet scotch merupakan bagian daging di sekitar tulang iga atau tulang rusuk sapi.
                                </p>
                                <div class="jumbotron" id="jumbotron">
                                    <img src="./img/PR4.jpeg" class="rounded-circle img-thumbnail">
                                </div>

                            </div>
                        </li>



                    </ul>

                </div>
            </section>

        </article>
    </main>
@endsection
