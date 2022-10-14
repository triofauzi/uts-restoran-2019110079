@extends('layouts.master')
@section('title', 'Product')
@section('content')

    <!--
                        - #FOOD MENU
                      -->
    <main>
        <section class="section food-menu-home" id="food-menu-home">
            <div class="container">

                <p class="section-subtitle">premiun steak house</p>

                <h2 class="h2 section-title">
                    Supper delicious Steak in town!
                </h2>

                <p class="section-text">
                    Steak house menggunakan daging dengan kualitas terbaik.
                </p>
            </div>
        </section>

        <section class="section food-menu" id="food-menu">
            <div class="container">
                <h2 class="h2 section-title">
                    Our Delicious <span class="span">Foods</span>
                </h2>

                <ul class="fiter-list">

                    <li>
                        <button class="filter-btn  active">All</button>
                    </li>

                </ul>

                <ul class="food-menu-list">

                    <li>
                        <div class="food-menu-card">

                            <div class="card-banner">
                                <div class="jumbotron" id="jumbotron">
                                    <img src="./img/MN4.jpg" class="rounded-circle img-thumbnail">
                                </div>

                                <div class="badge">-15%</div>
                                <button class="btn food-menu-btn">Order Now</button>
                            </div>

                            <div class="wrapper">
                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                            </div>

                            <h3 class="h3 card-title">Rib Eye Bone In – El Machote</h3>

                            <div class="price-wrapper">

                                <p class="price-text">Price:</p>

                                <data class="price">2.000.000</data>

                                <del class="del" value="69.00">2.300.000</del>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="food-menu-card">

                            <div class="card-banner">
                                <div class="jumbotron" id="jumbotron">
                                    <img src="./img/MN3.jpg" class="rounded-circle img-thumbnail">
                                </div>

                                <div class="badge">-10%</div>

                                <button class="btn food-menu-btn">Order Now</button>
                            </div>

                            <div class="wrapper">
                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                            </div>

                            <h3 class="h3 card-title">Aussie Yuu Beef</h3>

                            <div class="price-wrapper">

                                <p class="price-text">Price:</p>

                                <data class="price" value="29.00">1.900.00</data>

                                <del class="del">2.000.000</del>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="food-menu-card">

                            <div class="card-banner">
                                <div class="jumbotron" id="jumbotron">
                                    <img src="./img/MN2.jpg" class="rounded-circle img-thumbnail">
                                </div>

                                <div class="badge">-25%</div>

                                <button class="btn food-menu-btn">Order Now</button>
                            </div>

                            <div class="wrapper">
                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                            </div>

                            <h3 class="h3 card-title">US Prime Rib Eye Steak</h3>

                            <div class="price-wrapper">

                                <p class="price-text">Price:</p>

                                <data class="price" value="49.00">1.700.000</data>

                                <del class="del">2.000.000</del>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="food-menu-card">

                            <div class="card-banner">
                                <div class="jumbotron" id="jumbotron">
                                    <img src="./img/MN1.jpg" class="rounded-circle img-thumbnail">
                                </div>

                                <div class="badge">-20%</div>

                                <button class="btn food-menu-btn">Order Now</button>
                            </div>

                            <div class="wrapper">
                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                            </div>

                            <h3 class="h3 card-title"> Porterhouse</h3>

                            <div class="price-wrapper">

                                <p class="price-text">Price:</p>

                                <data class="price" value="59.00 ">1.899.000</data>

                                <del class="del">2.000.000</del>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="food-menu-card">

                            <div class="card-banner">
                                <div class="jumbotron" id="jumbotron">
                                    <img src="./img/PR5.jpg" class="rounded-circle img-thumbnail">
                                </div>

                                <div class="badge">-5%</div>

                                <button class="btn food-menu-btn">Order Now</button>
                            </div>

                            <div class="wrapper">
                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                            </div>

                            <h3 class="h3 card-title">Wagyu</h3>

                            <div class="price-wrapper">

                                <p class="price-text">Price:</p>

                                <data class="price" value="49.00">1.500.000</data>

                                <del class="del">1.699.000</del>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="food-menu-card">

                            <div class="card-banner">
                                <div class="jumbotron" id="jumbotron">
                                    <img src="./img/PR4.jpeg" class="rounded-circle img-thumbnail">
                                </div>
                                <div class="badge">-15%</div>

                                <button class="btn food-menu-btn">Order Now</button>
                            </div>

                            <div class="wrapper">
                                <div class="rating-wrapper">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                            </div>

                            <h3 class="h3 card-title">Tomahawk</h3>

                            <div class="price-wrapper">

                                <p class="price-text">Price:</p>

                                <data class="price" value="49.00">1.000.000</data>

                                <del class="del">1.200.000</del>

                            </div>

                        </div>
                    </li>

                </ul>


            </div>
        </section>

        <!--
                - #DELIVERY
              -->

        <section class="section section-divider gray delivery" style="background-image: url('./img/BG.jpg')">

            <div class="container">
                <h2 class="h2 section-title">
                    service in  <span class="span">steak house</span>
                </h2>
            </div>

            <div class="container">


                <div class="delivery-content">

                    <h2 class="h2 section-title">
                        make you feel a new experience <span class="span"> with the</span> best food
                    </h2>

                    <p class="section-text">
                        dengan tempat yang nyaman untuk dinikmati pelayan ramah kami
                        akan membuat anda ingin makan lagi di steak house.
                    </p>

                    <ul class="about-list">

                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Makanan sehat & sehat</span>
                        </li>

                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Zona Keluarga Dan Anak-Anak yang Luas</span>
                        </li>

                        <li class="about-item">
                            <ion-icon name="checkmark-outline"></ion-icon>

                            <span class="span">Musik & Fasilitas Lainnya</span>
                        </li>

                    </ul>


                    <button class="btn btn-hover">Order Now</button>
                </div>

                <figure class="delivery-banner">
                    <div class="jumbotron" id="jumbotron">
                        <img src="./img/GB2.jpeg" class="rounded-circle img-thumbnail">
                    </div>

                </figure>

            </div>
        </section>
    </main>
@endsection
