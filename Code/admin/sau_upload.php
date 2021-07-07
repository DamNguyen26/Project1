<?php
include '../includes/userLogin/connection.php';
if (isset($_POST['upload'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($file_parts));
    $expensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $expensions) === false) {
        $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
    if ($file_size > 2097152) {
        $errors[] = 'Kích thước file không được lớn hơn 2MB';
    }
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);
    $sql = "INSERT INTO information (image) VALUES ('$image')";
    mysqli_query($con, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">alert("Upload thành công!");</script>';
    } else {
        echo '<script language="javascript">alert("Upload thất bại!");</script>';
    }
}
$stmt = $con->prepare('SELECT password, email, name, phoneNumber, address, age, image FROM information');
$stmt->execute();
$stmt->bind_result($password, $email, $name, $phoneNumber, $address, $age, $image);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
    <style>
        #content {
            margin: 20px auto;
            border: 1px solid #cbcbcb;
            overflow: auto;
            padding: 20px;
        }

        form {
            margin: 20px auto;
        }

        form div {
            margin-top: 5px;
        }

        #img_div {
            padding: 5px;
            border: 1px solid #cbcbcb;
            float: left
        }

        #img_div:after {
            content: "";
            display: block;
            clear: both;
        }

        #img_div img {
            float: left;
            margin: 5px;
            width: 400px;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>ảnh khi đã đẩy lên db và kéo về đây</h1>
    <div id="content">

        <table>
            <tr>
                <td>FullName:</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><?= $password ?></td>
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
            <tr>
                <td>Birthday:</td>
                <td><img src='images/<?= $image ?>'></td>
            </tr>
        </table>
    </div>
</body>

</html>