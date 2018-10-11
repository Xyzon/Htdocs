<?php
/**
 * Created by PhpStorm.
 * User: Joey Clazing
 * Date: 17-9-2018
 * Time: 09:41
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="arkcss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prometheus</title>
</head>
<body>

<!--//////////Jumbotron//////////-->
<div class="jumbotron">
    <h1 class="display-4">Prometheus</h1>
</div>
<!--//////////Jumbotron end//////////-->


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">Prometheus</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ARK: Survival Evolved
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="screenshots.php">Screenshots</a></li>
                    <li><a href="video.php">Video's</a></li>
                    <li><a href="details.php">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Paladins
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../paladins/screenshots.php">Screenshots</a></li>
                    <li><a href="../paladins/video.php">Video's</a></li>
                    <li><a href="../paladins/details.php">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">The Forest
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Screenshots</a></li>
                    <li><a href="#">Video's</a></li>
                    <li><a href="#">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">World of Warcraft
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Screenshots</a></li>
                    <li><a href="#">Video's</a></li>
                    <li><a href="#">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">GTA V Online
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Screenshots</a></li>
                    <li><a href="#">Video's</a></li>
                    <li><a href="#">Details</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Conan Exiles
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Screenshots</a></li>
                    <li><a href="#">Video's</a></li>
                    <li><a href="#">Details</a></li>
                </ul>
            </li>
    </div>
</nav>
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade-effect">
        <div class="numbertext">1 / 8</div>
        <img src="img/ark1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade-effect">
        <div class="numbertext">2 / 8</div>
        <img src="img/ark2.jpg" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade-effect">
        <div class="numbertext">3 / 8</div>
        <img src="img/ark3.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade-effect">
        <div class="numbertext">4 / 8</div>
        <img src="img/ark4.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade-effect">
        <div class="numbertext">5 / 8</div>
        <img src="img/ark5.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade-effect">
        <div class="numbertext">6 / 8</div>
        <img src="img/ark6.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade-effect">
        <div class="numbertext">7 / 8</div>
        <img src="img/ark7.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade-effect">
        <div class="numbertext">8 / 8</div>
        <img src="img/ark8.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
    <span class="dot" onclick="currentSlide(8)"></span>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

</div>
</body>
</html>

