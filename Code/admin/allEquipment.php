<?php
session_start();
// Nếu chưa đăng nhập sẽ bị đá về trang login 
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../includes/userLogin/login.php');
    exit;
}
require_once("../includes/userLogin/connection.php");
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

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
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
            <a href="addEquip.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Add Equipment"><i class="fa fa-plus-square"></i></a>
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
                                <h2>Equipment Table</h2>
                                <?php
                                $sql = "SELECT id, note, image FROM equipment";
                                $result = $con->query($sql);
                                if ($result->num_rows > 0) {
                                    echo "<table><tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Note</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>";
                                    // đổ dữ liệu vào mỗi cột
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td><?php echo $row["id"] ?></td>
                                            <td><img src='../images/equipment/<?= $row["image"] ?>' style="height:200px;width:200px"></td>
                                            <td><?php echo $row["note"] ?></td>
                                            <td><a href="editEquip.php?id=<?php echo $row['id'] ?>"><i class="fas fa-edit">Edit</i></a></td>
                                            <td><a href="delEquip.php?id=<?php echo $row['id'] ?>"><i class="fas fa-trash-alt" name="del">Delete</i></a></td>
                                        </tr>
                                <?php
                                    }
                                    echo "</table>";
                                } else {
                                    echo "There is nothing here!";
                                }
                                ?>
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