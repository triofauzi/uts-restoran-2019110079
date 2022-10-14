@extends('layouts.master')
@section('title', 'About')
@section('content')

    <main>

        <section class="section food-about" id="food-about">
            <div class="container">

                <h2 class="h2 section-title">
                    About Us Steak House
                </h2>

            </div>
        </section>

        <section class="section section-divider gray about" id="about"style="background-image: url('./img/BG.jpg')">
            <div class="container">

                <figure class="delivery-banner">
                    <div class="jumbotron" id="jumbotron">
                        <img src="./img/GB3.jpg" class="rounded-circle img-thumbnail">
                    </div>
                </figure>


                <div class="about-content">

                    <h2 class="h2 section-title">
                        Supper delicious Steak
                        <span class="span">in Town!</span>
                    </h2>

                    <p class="section-text">
                        Steak house ini didirikan pada tahun 2030 dengan keberanian dan keinginan yang kuat
                        serta kesukaan saya terhadap daging sapi akhirnya saya mendirikan steak house ini.
                    </p>

                    <ul class="about-list">

                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Daging-daging terbaik dari dalam dan luar negeri</span>
                        </li>

                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Chef yang sudah berpengalaman</span>
                        </li>

                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Pegawai yang ramah</span>
                        </li>

                    </ul>

                    <button class="btn btn-hover">Order Now</button>

                </div>

            </div>
        </section>




    </main>

@endsection
