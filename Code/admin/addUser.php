<?php
session_start();
// Nếu chưa đăng nhập sẽ bị đá về trang login 
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../includes/userLogin/login.php');
    exit;
}
require_once("../includes/userLogin/connection.php");
// // lấy giá trị của các thông tin dựa trên id từ database
// $stmt = $con->prepare('SELECT password, email, name, phoneNumber, address, age, image, username FROM information WHERE id = ?');
// // sử dụng id để lấy giá trị vì set id là key nên không sợ giống nhau
// $stmt->bind_param('i', $_SESSION['id']);
// $stmt->execute();
// $stmt->bind_result($password, $email, $name, $phoneNumber, $address, $age, $image, $username);
// $stmt->fetch();
// $stmt->close();
?>

<!DOCTYPE html>
<html>
<title>Admin Rainwater Harvesting</title>
<meta charset="UTF-8">
<link rel="icon" href="images/aptech-squarelogo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Open Sans", sans-serif
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password],
    input[type=numbers],
    input[type=date],
    input[type=file] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus,
    input[type=numbers]:focus,
    input[type=date]:focus,
    input[type=file]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .register {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .register:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }
</style>

<body class="w3-theme-l5">

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="admin.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Admin</a>
            <a href="../includes/userLogin/logout.php" class="w3-button w3-hide-small w3-right w3-padding-large w3-hover-white"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
    </div>

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <div class="w3-row">
            <div class="w3-col">
                <div class="w3-row-padding">
                    <div class="w3-col m12">
                        <div class="w3-card w3-round w3-white">
                            <div class="w3-container w3-padding">
                                <form action="add.php" method="post" enctype="multipart/form-data">
                                    <div class="container">
                                        <h1>Add User</h1>
                                        <p>Please fill in this form to create an account.</p>
                                        <hr>

                                        <label for="email"><b>Email</b></label>
                                        <input type="text" placeholder="Enter Email" name="email" id="email" required>

                                        <label for="password"><b>Password</b></label>
                                        <input type="password" placeholder="Enter Password" name="password" id="password" required>

                                        <label for="repeatPassword"><b>Repeat Password</b></label>
                                        <input type="password" placeholder="Repeat Password" name="repeatPassword" id="repeatPassword" required>

                                        <label for="username"><b>Username</b></label>
                                        <input type="text" placeholder="Enter Username" name="username" id="username" required>

                                        <label for="fullname"><b>Fullname</b></label>
                                        <input type="text" placeholder="Enter Fullname" name="fullname" id="fullname" required>

                                        <label for="phoneNumber"><b>Phone Number</b></label>
                                        <input type="numbers" placeholder="Enter Phone Number" name="phoneNumber" id="phoneNumber" required>

                                        <label for="address"><b>Address</b></label>
                                        <input type="text" placeholder="Enter Address" name="address" id="address" required>

                                        <label for="birthday"><b>Birthday</b></label>
                                        <input type="date" placeholder="Enter Birthday" name="birthday" id="birthday" required>
                                        <!-- validate -->

                                        <label for="avatarImgage"><b>Avatar Imgage</b></label>
                                        <input type="hidden" name="size" value="1000000" required>
                                        <input type="file" name="image" required>

                                        <hr>
                                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                                        <button type="submit" class="register" name="register">Register</button>
                                    </div>

                                    <div class="container signin">
                                        <p>Already have an account? <a href="admin.php">Sign in</a>.</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Footer -->
    <footer class="w3-container w3-theme-d5" style="text-align: center;">
        <p>Powered by <a href="https://www.facebook.com/Mickey0246/" target="_blank" class="w3-hover-text-green">Me</a></p>
    </footer>

    <script>
        // Accordion
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-theme-d1";
            } else {
                x.className = x.className.replace("w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-theme-d1", "");
            }
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

</body>

</html>