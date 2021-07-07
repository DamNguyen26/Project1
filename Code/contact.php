<?php
include 'includes\html\header.php';

include_once 'includes/userLogin/connection.php';

if (isset($_POST['submit'])) {

    // nhận toàn bộ giá trị của các biến từ form 
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // sql đổ dữ liệu về db
    $sql = "INSERT INTO feedback (name, email, phoneNumber, message) 
    VALUES('$name', '$email',  '$phone',  '$message')";

    $result = mysqli_query($con, $sql);
    if ($result > 0) {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Feedback has sent!"); window.location="index.php";</script>';
        die();
    } else {
        echo '<script language="javascript">alert("Feedback has not sent!"); window.location="index.php";</script>';
        die();
    }
}

?>

<body>
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">WHERE I WORK</h3>
        <p class="w3-center"><em>I'd love your feedback!</em></p>

        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m4 w3-container">
                <!-- <div class="w3-image w3-round" style="width:100%"> -->
                <!-- <div id="map" width="275" height="290" style="width:100%"></div> -->
                <!-- <img class="w3-image w3-round" style="width:100%" src="images/map.jpg"> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7295883706083!2d105.84690551548337!3d21.003473994015657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac428c3336e5%3A0xb7d4993d5b02357e!2sAptech%20Computer%20Education!5e0!3m2!1svi!2s!4v1623134600180!5m2!1svi!2s" width="275" height="290" style="width:100%"></iframe>
                <!-- </div> -->
            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>54 Lê Thanh Nghị, Bách Khoa, Hai Bà Trưng, Hà Nội, Việt Nam<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a style="text-decoration: none" href="tel:0983650209">0983650209</a><br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a style="text-decoration: none" href="mailto:dammit2525@gmail.com">dammit2525@gmail.com</a><br>
                </div>
                <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
                <form action="" method="post">
                    <div class="w3-row-padding" style="margin:0 -8px 8px -8px">
                        <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
                    </div>

                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="email" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required name="email">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="number" placeholder="Phone Number" required name="phone">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Your message" required name="message">
                    <button class="w3-button w3-black w3-right w3-section" type="submit" name="submit">
                        <i class="fa fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include 'includes\html\footer.php'
?>

<!-- Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT5k-RhvFSVIuCALkpHhKgQx6SJUd9gpI"></script>

<!-- Google Map (Custom Style) -->
<script src="js/google.map.js"></script>