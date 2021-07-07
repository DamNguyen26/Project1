<?php
include 'includes/html/header.php';
?>
<style>
    #slideshow {
        overflow: hidden;
        height: 510px;
        width: 728px;
        margin: 0 auto;
    }

    .slide-wrapper {
        width: 2912px;
        -webkit-animation: slide 60s ease infinite;
    }

    .slide {
        float: left;
        height: 510px;
        width: 728px;
    }

    @-webkit-keyframes slide {
        20% {
            margin-left: 0px;
        }

        30% {
            margin-left: -728px;
        }

        50% {
            margin-left: -728px;
        }

        60% {
            margin-left: -1456px;
        }

        80% {
            margin-left: -1456px;
        }
    }
</style>

<body>
    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
        <div class="w3-centre w3-section">
            Weather Viet Nam 2020
        </div>
    </div>
    <br>
    <br>
    <div id="slideshow">
        <div class="slide-wrapper">
            <?php
            require_once("includes/userLogin/connection.php");
            $sql = "SELECT id, name, image FROM weather";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="slide">
                    <img src='images/weather/<?= $row["image"] ?>' class="w3-round w3-image w3-hover-opacity-off" width="100%" height="100%">
                    <h2 style="text-align: center;"><?php echo $row['name'] ?></h2>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
    <br>


    <!-- Bản đồ nhiệt -->
    <iframe width="100%" height="850" src="https://embed.windy.com/embed2.html?lat=17.309&lon=107.974&detailLat=21.031&detailLon=105.852&width=650&height=450&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=&calendar=12&pressure=true&type=map&location=coordinates&detail=true&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>

    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
        <div class="w3-centre w3-section">
            Hanoi - Weather forecast
        </div>
    </div>
    <!-- Hà Nội -->
    <div id="16f790bb83573d0ae820061bcb38bb98" class="ww-informers-box-854753">
        <p class="ww-informers-box-854754"><a href="https://world-weather.info/forecast/vietnam/ha_noi/">Weather in Hanoi</a><br><a href="https://world-weather.info/forecast/usa/chicago/">https://world-weather.info/forecast/usa/chicago/</a></p>
    </div>
    <script async type="text/javascript" charset="utf-8" src="https://world-weather.info/wwinformer.php?userid=16f790bb83573d0ae820061bcb38bb98"></script>
    <style>
        .ww-informers-box-854754 {
            -webkit-animation-name: ww-informers54;
            animation-name: ww-informers54;
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            font-size: 12px;
            font-family: Arial;
            line-height: 18px;
            text-align: center
        }

        @-webkit-keyframes ww-informers54 {

            0%,
            80% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes ww-informers54 {

            0%,
            80% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }
    </style>

    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
        <div class="w3-centre w3-section">
            Da Nang - Weather forecast
        </div>
    </div>
    <!-- Đà Nẵng  -->
    <div id="af565ac624598ed08a0b22c4390955ff" class="ww-informers-box-854753">
        <p class="ww-informers-box-854754"><a href="https://world-weather.info/forecast/vietnam/danang/month/">world-weather.info/forecast/vietnam/danang/month/</a><br><a href="https://world-weather.info/forecast/usa/boston/">https://world-weather.info</a></p>
    </div>
    <script async type="text/javascript" charset="utf-8" src="https://world-weather.info/wwinformer.php?userid=af565ac624598ed08a0b22c4390955ff"></script>
    <style>
        .ww-informers-box-854754 {
            -webkit-animation-name: ww-informers54;
            animation-name: ww-informers54;
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            font-size: 12px;
            font-family: Arial;
            line-height: 18px;
            text-align: center
        }

        @-webkit-keyframes ww-informers54 {

            0%,
            80% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes ww-informers54 {

            0%,
            80% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }
    </style>

    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
        <div class="w3-centre w3-section">
            Ho Chi Minh City - Weather forecast
        </div>
    </div>
    <!-- Hồ Chí Minh -->
    <div id="cabcb3482d96aace48b6fd0a93fa4c40" class="ww-informers-box-854753">
        <p class="ww-informers-box-854754"><a href="https://world-weather.info/forecast/vietnam/ho_chi_minh/14days/">https://world-weather.info</a><br><a href="https://world-weather.info/forecast/usa/denver/">world-weather.info</a></p>
    </div>
    <script async type="text/javascript" charset="utf-8" src="https://world-weather.info/wwinformer.php?userid=cabcb3482d96aace48b6fd0a93fa4c40"></script>
    <style>
        .ww-informers-box-854754 {
            -webkit-animation-name: ww-informers54;
            animation-name: ww-informers54;
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            font-size: 12px;
            font-family: Arial;
            line-height: 18px;
            text-align: center
        }

        @-webkit-keyframes ww-informers54 {

            0%,
            80% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes ww-informers54 {

            0%,
            80% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }
    </style>

</body>
<?php
include 'includes/html/footer.php'
?>