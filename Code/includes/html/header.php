<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rainwater Harvesting</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- logo icon -->
    <link rel="icon" href="includes/html//images/aptech-squarelogo.jpg">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif
        }

        body,
        html {
            height: 100%;
            line-height: 1.8;
        }

        /* Create a Parallax Effect */
        .bgimg-1,
        .bgimg-2 {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
        }

        /* Full height image */
        .bgimg-1 {
            background-image: url("includes/html/images/background1.jpg");
            min-height: 100%;
        }

        /* Second image */
        .bgimg-2 {
            background-image: url("includes/html/images/background.jpg");
            min-height: 400px;
        }

        .bgimg-3 {
            background-image: url("includes/html/images/background2.jpg");
            min-height: 400px;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }

        .moreText {
            display: none;
        }

        .text.show-more .moreText {
            display: inline;
        }
    </style>
</head>

<body>
    <!-- Navbar (sit on top of everything) -->
    <!-- navbar được đặt cố định trên đầu các trang  -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="index.php" class="w3-bar-item w3-button w3-wide"><img src="includes/html/images/logo.jpg" /></a>
            <!-- Right-sided navbar links -->
            <!-- thanh điều hướng bên phải -->
            <div class="w3-right w3-hide-small">
                <a href="index.php" class="w3-bar-item w3-button">HOME</a>
                <a href="index.php#TheWay" class="w3-bar-item w3-button">HOW TO DO IT.</a>
                <a href="weather.php" class="w3-bar-item w3-button">WEATHER</a>
                <a href="contact.php" class="w3-bar-item w3-button">CONTACT</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->
            <!-- ẩn đi phần thò thụt link khi thoát từ chế độ thu nhỏ và thay bằng thanh điều hướng bên phải -->
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!-- Sidebar on small screens when clicking the menu icon -->
    <!-- thanh điều hướng thò thụt bên trái  -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
        <a href="index.php #TheWay" onclick="w3_close()" class="w3-bar-item w3-button">HOW TO DO IT.</a>
        <a href="weather.php" onclick="w3_close()" class="w3-bar-item w3-button">WEATHER</a>
        <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>

    <!-- Header with full-height image -->
    <div class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Rainwater Harvesting</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Rainwater Harvesting</span><br>
            <span class="w3-large">We forget that the water cycle and the life cycle are one.</span>
            <p><a href="index.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more.</a></p>
        </div>
        <!-- hiển thị các đường link giới thiệu về cá nhân -->
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <a href="https://www.facebook.com/Mickey0246/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a href="https://www.instagram.com/_damnguyen26_/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
            <a href="https://twitter.com/damnguyen26"><i class="fa fa-twitter w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
            <a href="https://github.com/DamNguyen26"><i class="fa fa-github w3-hover-opacity"></i></a>
            <a href="https://mail.google.com"><i class="fa fa-google-plus w3-hover-opacity"></i></a>
            <a href="https://www.youtube.com"><i class="fa fa-youtube w3-hover-opacity"></i></a>
        </div>
    </div>
</body>