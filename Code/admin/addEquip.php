<?php
session_start();
// Nếu chưa đăng nhập sẽ bị đá về trang login 
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../includes/userLogin/login.php');
    exit;
}
include '../includes/userLogin/connection.php';
if (isset($_POST['upload'])) {

    // nhận toàn bộ giá trị của các biến từ form 
    $note = mysqli_real_escape_string($con, $_POST['note']);

    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($file_parts));
    $expensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $expensions) === false) {
        // $errors[] = "Upload file JPEG, PNG or PNG.";
        echo '<script language="javascript">alert("Upload file JPEG, PNG or PNG!"); window.location="addEquip.php";</script>';
        die();
    }
    if ($file_size > 2097152) {
        // $errors[] = 'File Size > 2MB';
        echo '<script language="javascript">alert("File Size > 2MB!"); window.location="addEquip.php";</script>';
        die();
    }

    // đường dẫn của file ảnh và tên đổ lên db
    $image = $_FILES['image']['name'];
    $target = "../images/equipment/" . basename($image);

    // sql đổ dữ liệu về db
    $sql = "INSERT INTO equipment (image, note) 
    VALUES('$image', '$note')";

    mysqli_query($con, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">alert("Upload suscess!"); window.location="allEquipment.php";</script>';
    } else {
        echo '<script language="javascript">alert("Upload fail!"); window.location="addEquip.php";</script>';
        die();
    }
}
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
    input[type=file] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
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
    .upload {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .upload:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }
</style>

<body class="w3-theme-l5">

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="admin.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Admin</a>
            <a href="allEquipment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Add product"><i class="fa fa-plus-square"></i></a>
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

    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <div class="w3-row">
            <div class="w3-col">
                <div class="w3-row-padding">
                    <div class="w3-col m12">
                        <div class="w3-card w3-round w3-white">
                            <div class="w3-container w3-padding">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="container">
                                        <h1>Add Equipment</h1>
                                        <p>Please fill in this form to create new product.</p>
                                        <hr>

                                        <label for="productImgage"><b>Product image</b></label>
                                        <input type="hidden" name="size" value="1000000" required>
                                        <input type="file" name="image" required>

                                        <label for="note"><b>Note</b></label>
                                        <input type="text" placeholder="Enter Note" name="note" id="note" required>

                                        <hr>
                                        <button type="submit" class="upload" name="upload">Upload</button>
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