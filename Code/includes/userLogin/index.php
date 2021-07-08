<?php
session_start();
// Nếu chưa đăng nhập sẽ bị đá về trang login 
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
require_once("connection.php");
// lấy giá trị của các thông tin dựa trên id từ database
$stmt = $con->prepare('SELECT email, name, phoneNumber, address, age, image FROM information WHERE id = ?');
// sử dụng id để lấy giá trị vì set id là key nên không sợ giống nhau
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($email, $name, $phoneNumber, $address, $age, $image);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link rel="icon" href="../html/images/aptech-squarelogo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <style>
        .navtop {
            background-color: #2f3947;
            height: 60px;
            width: 100%;
            border: 0;
        }

        .navtop div {
            display: flex;
            margin: 0 auto;
            width: 1000px;
            height: 100%;
        }

        .navtop div h1,
        .navtop div a {
            display: inline-flex;
            align-items: center;
        }

        .navtop div h1 {
            flex: 1;
            font-size: 24px;
            padding: 0;
            margin: 0;
            color: #eaebed;
            font-weight: normal;
        }

        .navtop div a {
            padding: 0 20px;
            text-decoration: none;
            color: #c1c4c8;
            font-weight: bold;
        }

        .navtop div a i {
            padding: 2px 8px 0 0;
        }

        .navtop div a:hover {
            color: #eaebed;
        }

        body.loggedin {
            background-color: #f3f4f7;
        }

        .content {
            width: 1000px;
            margin: 0 auto;
        }

        .content h2 {
            margin: 0;
            padding: 25px 0;
            font-size: 22px;
            border-bottom: 1px solid #e0e0e3;
            color: #4a536e;
        }

        .content>p,
        .content>div {
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
            margin: 25px 0;
            padding: 25px;
            background-color: #fff;
        }

        .content>p table td,
        .content>div table td {
            padding: 5px;
        }

        .content>p table td:first-child,
        .content>div table td:first-child {
            font-weight: bold;
            color: #4a536e;
            padding-right: 15px;
        }

        .content>div p {
            padding: 5px;
            margin: 0 0 10px 0;
        }
        /*  
Thanks to: Usama Tahir
https://medium.com/@AmJustSam
*/

*{
 margin: 0;
 padding: 0;
}

html{
    width: 100vw;
    height: 100vh;
}

/* CSS which you need for blurred box */
body{
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: cover;
 background-position: top;
 background-image:url(http://bit.ly/2gPLxZ4);
 width: 100%;
 height: 100%;
 font-family: Arial, Helvetica;
 letter-spacing: 0.02em;
  font-weight: 400;
 -webkit-font-smoothing: antialiased; 
}

.blurred-box{
  position: relative;
  width: 250px;
  height: 350px;
  top: calc(50% - 175px);
  left: calc(50% - 125px);
  background: inherit;
  border-radius: 2px;
  overflow: hidden;
}

/* .blurred-box:after{
 content: '';
 width: 300px;
 height: 300px;
 background: inherit; 
 position: absolute;
 left: -25px;
 left position
 right: 0;
 top: -25px;  
 top position bottom: 0;
 box-shadow: inset 0 0 0 200px rgba(255,255,255,0.05);
 filter: blur(10px);
} */


/* Form which you dont need */
.user-login-box{
  position: relative;
  margin-top: 50px;
  text-align: center;
  z-index: 1;
}
.user-login-box > *{
  display: inline-block;
  width: 200px;
}

.user-icon{
  width: 100px;
  height: 100px;
  position: relative;
  border-radius: 50%;
  background-size: contain;
  background-image: url("images/DamKhoiNguyen.jpg");
}

.user-name{
  margin-top: 15px;
  margin-bottom: 15px;
  color: white;
}

input.user-password{
  width: 120px;
  height: 18px;
  opacity: 0.4;
  border-radius: 2px;
  padding: 5px 15px;
  border: 0;
}


    </style>
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>Website Title</h1>
            <a href="index.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>

    <div class="blurred-box">
        <div class="user-login-box">
            <span class="user-icon"><img src='images/<?= $image?>'></span>
            <div class="user-name"><?= $_SESSION['name'] ?></div>
        </div>

    </div>


    <div class="content">
        <h2>Profile Page</h2>
        <p>Welcome back, <?= $_SESSION['name'] ?>!</p>

        <div>
            <p>Your account details are below:</p>
            <table>
                <tr>
                    <td>FullName:</td>
                    <td><?= $name ?></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><?= $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><?= $phoneNumber ?></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><?= $address ?></td>
                </tr>
                <tr>
                    <td>Birthday:</td>
                    <td><?= $age ?></td>
                </tr>
            </table>
            <p>To go <a href="../../admin/admin.php" class="w3-hover-text-green">admin</a> page</p>
        </div>
    </div>
</body>

</html>