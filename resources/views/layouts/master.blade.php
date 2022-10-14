<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_testimonials.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


    <title>@yield('title', 'MyCompany') | MyCompany</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap"
        rel="stylesheet">

</head>

<body id="top">

    <!--- #HEADER-->

    <header class="header " data-header>
        <div class="container">

            <h1>
                <a href="#" class="logo">SteakHouse<span class="span">.</span></a>
            </h1>

            <nav class="navbar  fixed-top" data-navbar>
                <ul class="navbar-list">

                    <li class="nav-item">
                        <a class="navbar-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-link {{ Route::is('product') ? 'active' : '' }}" href="{{ route('product') }}">Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-link {{ Route::is('testimonials') ? 'active' : '' }}" href="{{ route('testimonials') }}">Testimonials</a>
                    </li>

                </ul>
            </nav>
            <button class="nav-toggle-btn" aria-label="Toggle Menu" data-menu-toggle-btn>
                <span class="line top"></span>
                <span class="line middle"></span>
                <span class="line bottom"></span>
            </button>
        </div>

        </div>
    </header>
    <main role="main" class="inner cover">
        @yield('content')
    </main>

    <!-- - #FOOTER-->

    <footer class="footer">

        <div class="footer-top" style="background-image: url('./img/footer-illustration.png')">
            <div class="container">

                <div class="footer-brand">

                    <a href="" class="logo">SteakHouse<span class="span">.</span></a>

                    <p class="footer-text">
                        memberikan pengalaman yang tidak akan pernah terlupakan ketika Anda sudah mencoba steak house..
                    </p>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Contact Info</p>
                    </li>

                    <li>
                        <p class="footer-list-item">+62 88990088733</p>
                    </li>

                    <li>
                        <p class="footer-list-item">steakhouse@YourGmail24.com</p>
                    </li>

                    <li>
                        <address class="footer-list-item">Jalan Dago No 111, Bandung.</address>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Opening Hours</p>
                    </li>

                    <li>
                        <p class="footer-list-item">Monday-Friday: 08:00-22:00</p>
                    </li>

                    <li>
                        <p class="footer-list-item">Tuesday 4PM: Till Mid Night</p>
                    </li>

                    <li>
                        <p class="footer-list-item">Saturday: 10:00-16:00</p>
                    </li>

                </ul>

                <form action="" class="footer-form">

                    <p class="footer-list-title">Book a Table</p>

                    <div class="input-wrapper">

                        <input type="text" name="full_name" required placeholder="Your Name" aria-label="Your Name"
                            class="input-field">

                        <input type="email" name="email_address" required placeholder="Email" aria-label="Email"
                            class="input-field">

                    </div>

                    <div class="input-wrapper">

                        <select name="total_person" aria-label="Total person" class="input-field">
                            <option value="person">Person</option>
                            <option value="2 person">2 Person</option>
                            <option value="3 person">3 Person</option>
                            <option value="4 person">4 Person</option>
                            <option value="5 person">5 Person</option>
                        </select>

                        <input type="date" name="booking_date" aria-label="Reservation date" class="input-field">

                    </div>

                    <textarea name="message" required placeholder="Message" aria-label="Message" class="input-field"></textarea>

                    <button type="submit" class="btn">Book a Table</button>

                </form>

            </div>
        </div>


    </footer>

    <footer>
        <div class="footer-bottom ">
            <div class="container">
                <p class="copyright-text">
                    &copy; 2022 <a href="#" class="copyright-link">TrioFauziNugraha</a> 2019110079.
                </p>
            </div>
        </div>
    </footer>

    <!--js -->
    <script src="{{ asset('js/script.js') }}" defer></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
