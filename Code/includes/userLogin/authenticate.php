<?php
session_start();
require_once("connection.php");
// kiểm tra sự tồn tại của thông tin trên database thông qua isset
if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password fields!');
}

// Chuẩn bị SQL , sử dụng PreparedStatement để ngăn chặn việc đưa SQL vào
if ($stmt = $con->prepare('SELECT id, password FROM information WHERE username = ?')) {
    // Bind parameters : gán giá trị vào các tham số ẩn (truyền giá trị vào các dấu chấm hỏi)
    $stmt->bind_param('s', $_POST['username']);
    // thực thi câu lệnh 
    $stmt->execute();
    // kiểm tra sự tồn tại của tài khoản trong database
    $stmt->store_result();
    // nếu tồn tại trong db
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // đã thấy thông tin trong database và kiểm tra password
        // nếu ở trong database mã hóa password thì ta dùng hashed passwords
        if (password_verify($_POST['password'], $password)) {
            // tạo 1 session cho tài khoản và sẽ nhớ thông tin của tài khoản trên server đến khi người dùng thoát ra
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: index.php');
        } else {
            echo '<script language="javascript">alert("Incorrect password!"); window.location="login.php";</script>';
            session_destroy();
        }
    } else {
        echo '<script language="javascript">alert("Incorrect username!"); window.location="login.php";</script>';
        session_destroy();
    }

    $stmt->close();
}
