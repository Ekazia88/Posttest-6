<?php
session_start();
if($_SESSION['level']== ""){
    header("location: index.php?pesan=gagal");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/mainpage.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/mainpage.js"></script>
    <title>Animflix-Home</title>
</head>
<body class = light-mode>
<header>
    <div class="wrapper">
        <nav class="navbar">
          <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
              <a href="#"><li>Home</li></a>
              <a href="#"><li>Series</li></a>
              <a href="#"><li>film</li></a>
              <a href="#"><li>New From Animflix</li></a>
              <a href="about.html" target="_blank"><li>About</li></a>
            </ul>
            </div>
            <div class ="navbar-logo">
                <img src="./img/Animflix-Logo.png" alt="">
            </div>
            <div class="search-2">
              <img src="./img/baseline_search_white_24dp.png" >
            </div>
                <ul class="list-bar">
                    <li><a href="">Home</a></li>
                    <li><a href="">Series</a></li>
                    <li><a href="">Film</a></li>
                    <li><a href="">New From ANIMFLIX </a></li>
                    <li><a href="">About</a></li>
                <ul>
                    <div class="right-menu">
                        <ul>
                            <li>
                                <a class="search">
                                    <span class="material-icons">
                                        search
                                    </span>
                                </a> 

                            </li>
                            <li>
                            <a class="darkmode-toggle">
                                <input type="checkbox" class="toggle-button">
                            </a>
                            </li>
                            <li>
                            <a href="">AniKids</a>
                            </li>
                            <li>
                                <a class="gift">
                                <img src="./img/gift-512.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="notif">
                                <img src="./img/baseline_notifications_white_24dp.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="user-profile">
                                <img src="./img/User-Profile-PNG.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="Log_out.php">Log out</a>
                            </li>
                        <ul>
                    </div>
            </div>
        </nav>
    </div>
</header>
<main>
    <div class="row">
        <div class="header">
            <h3 class="title">Fall Season</h3>
            <div class="progress-bar"></div>
        </div>
        <div class =container>
            <button class="handle left-handle">
                <div class="text">&#8249;</div>
            </button>
            <div class="slider">
                <img src="./img/anime-mob-psycho-100-season-3.jpg">
                <img src="./img/anime-my-hero-academia-season-6-sub-indo-viu.jpg">
                <img src="./img/bleachthousandyearbloodwararc_keyvisual2-1-e1659800164822.webp">
                <img src="./img/JUJITSU.jpg">
                <img src="./img/one piece.webp">
                <img src="./img/Chainsaw-Man-Anime.webp">
                <img src="./img/shinobi no ittoki.jpg">
                <img src="./img/spy-x-family.webp">
            </div>
            <button class ="handle right-handle">
                <div class="text">&#8250;</div>
            </button>
        </div>
    </div>
</main>
        <section class="footer">Footer</section>

        <footer class="footer-distributed">
    
          <div class="footer-right">


    
          </div>
    
          <div class="footer-left">
          </div>

        </footer>
    <script src="./js/jquery.js"></script>
</body>
</html>