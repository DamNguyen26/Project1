<?php
session_start();
// Nếu chưa đăng nhập sẽ bị đá về trang login 
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../includes/userLogin/login.php');
    exit;
}
include '../includes/userLogin/connection.php';
if (isset($_POST['register'])) {

    // nhận toàn bộ giá trị của các biến từ form 
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $repeatPassword = mysqli_real_escape_string($con, $_POST['repeatPassword']);
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);

    // kiểm tra sự tồn tại của email và user trong db
    $user_check_query = "SELECT * FROM information WHERE username='$username' OR email='$email'";
    $result = mysqli_query($con, $user_check_query);
    // $user = mysqli_fetch_assoc($result);
    $user = mysqli_num_rows($result);

    // lớn hơn 1 là tồn tại 
    if ($user > 0) {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Register fail because username or email already exsisted!"); window.location="addUser.php";</script>';
        die();
    }
    if ($password != $repeatPassword) {
        echo '<script language="javascript">alert("Input password and repeat password must be the same!"); window.location="addUser.php";</script>';
        die();
    }

    // if ($user) {
    //     // nếu user đã tồn tại 
    //     if ($user['username'] === $username) {
    //         array_push($errors, "Username already exists");
    //     }
    //     // nếu email đã tồn tại 
    //     if ($user['email'] === $email) {
    //         array_push($errors, "email already exists");
    //     }
    // }

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
        echo '<script language="javascript">alert("Upload file JPEG, PNG or PNG!"); window.location="addUser.php";</script>';
        die();
    }
    if ($file_size > 2097152) {
        // $errors[] = 'File Size > 2MB';
        echo '<script language="javascript">alert("File Size > 2MB!"); window.location="addUser.php";</script>';
        die();
    }

    // mã hóa mật khẩu vào db
    $passwordStrong = password_hash($password, PASSWORD_DEFAULT);

    // $passwordStrong = $password;

    // đường dẫn của file ảnh và tên đổ lên db
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);

    // sql đổ dữ liệu về db
    $sql = "INSERT INTO information (username, image, password, name, email, phoneNumber, address, age) 
    VALUES('$username', '$image', '$passwordStrong',  '$fullname', '$email', '$phoneNumber', '$address', '$birthday')";

    mysqli_query($con, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">alert("Register successfully!"); window.location="addUser.php";</script>';
    } else {
        echo '<script language="javascript">alert("Register failure!"); window.location="addUser.php";</script>';
        die();
    }
}
