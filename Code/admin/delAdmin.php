<?php
session_start();
// Nếu chưa đăng nhập sẽ bị đá về trang login 
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../includes/userLogin/login.php');
    exit;
}
include '../includes/userLogin/connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM information WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo '<script language="javascript">alert("Record deleted successfully!"); window.location="admin.php";</script>';
    die();
} else {
    echo '<script language="javascript">alert("Error deleting record!"); window.location="admin.php";</script>';
    die();
}

$con->close();
