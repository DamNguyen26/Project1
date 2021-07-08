<?php
session_start();
// Nếu chưa đăng nhập sẽ bị đá về trang login 
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../includes/userLogin/login.php');
    exit;
}
require_once("../includes/userLogin/connection.php");
// lấy giá trị của các thông tin dựa trên id từ database
$stmt = $con->prepare('SELECT password, email, name, phoneNumber, address, age, image FROM information WHERE id = ?');
// sử dụng id để lấy giá trị vì set id là key nên không sợ giống nhau
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email, $name, $phoneNumber, $address, $age, $image);
$stmt->fetch();
$stmt->close();
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
</style>

<body class="w3-theme-l5">

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
        <?php
                
                $sqly = "SELECT id, name, image FROM information";
                $my_result = $con->query($sqly);
                $data = $my_result->fetch_assoc();
                ?>
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Admin</a>
            <a href="addUser.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Add user"><i class="fa fa-user-plus"></i></a>
            <a href="allProduct.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Show all product"><i class="fa fa-plus-square"></i></a>
            <a href="allEquipment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Show all equipment"><i class="fa fa-cart-plus"></i></a>
            <a href="../includes/userLogin/logout.php" class="w3-button w3-hide-small w3-right w3-padding-large w3-hover-white"><i class="fas fa-sign-out-alt"></i>Logout</a>
            <a href="editAdmin.php?id=<?php echo $data['id'] ?>" class="w3-button w3-hide-small w3-right w3-padding-large w3-hover-white"><i class="fa fa-edit"></i></a>
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
        <!-- The Grid -->
        <div class="w3-row">
            <!-- Left Column -->
            <div class="w3-col m3">
                <!-- Profile -->
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center">My Profile</h4>
                        <p class="w3-center"><img src='../images/<?= $image ?>' class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                        <hr>
                        <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i>
                            <td><?= $name ?></td>
                        </p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i>
                            <td><?= $email ?></td>
                        </p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i>
                            <td><?= $phoneNumber ?></td>
                        </p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>
                            <td><?= $address ?></td>
                        </p>
                        <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>
                            <td><?= $age ?></td>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="w3-col m7">
                <div class="w3-row-padding">
                    <div class="w3-col m12">
                        <div class="w3-card w3-round w3-white">
                            <div class="w3-container w3-padding">
                                <h1 style="text-align: center;">FEEDBACK FORM USER</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $sql = "SELECT id, name, email, phoneNumber, message FROM feedback ORDER BY feedback.id DESC";
                $result = $con->query($sql);

                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                        <!-- <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px"> -->
                        <span class="w3-right"><a href="delFeedback.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash" name="del"></i></a></span>
                        <h4><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i><?php echo $row["name"] ?></h4><br>
                        <div class="w3-row-padding" style="margin:0 -16px">
                            <div class="w3-half">
                                <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i><?php echo $row["email"] ?></p>
                                <!-- <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom"> -->
                            </div>
                            <div class="w3-half">
                                <p><i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i><?php echo $row["phoneNumber"] ?></p>
                                <!-- <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom"> -->
                            </div>
                        </div>
                        <hr class="w3-clear">
                        <p><?php echo $row["message"] ?></p>
                    </div>
                <?php
                }
                ?>

                <!-- End Middle Column -->
            </div>
            <!-- Right Column -->
            <div class="w3-col m2">
                <?php
                $sqly = "SELECT id, name, image FROM information";
                $my_result = $con->query($sqly);
                while ($data = $my_result->fetch_assoc()) {
                ?>
                    <div class="w3-card w3-round w3-white w3-center">
                        <div class="w3-container">
                            <p>Admin</p>
                            <img src='../images/<?= $data["image"] ?>' alt="Avatar" style="width:50%"><br>
                            <span><?php echo $data["name"] ?></span>
                            <div class="w3-row w3-opacity">
                                <div class="w3-half">
                                    <!-- <button class="w3-button w3-block w3-green w3-section" title="Edit"><a href="editAdmin.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit"></i></a></button> -->
                                    <button class="w3-button w3-block w3-green w3-section" title="Edit"><a href="viewAdmin.php?id=<?php echo $data['id'] ?>"><i class="fa fa-eye"></i></a></button>
                                </div>
                                <div class="w3-half">
                                    <button class="w3-button w3-block w3-red w3-section" title="Delete"><a href="delAdmin.php?id=<?php echo $data['id'] ?>"><i class="fa fa-trash"></i></a></button>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <br>
                <?php
                }
                ?>
                <!-- End Right Column -->
            </div>
            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
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