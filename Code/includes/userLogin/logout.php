<?php
session_start();
session_destroy();
// hướng ngược lại trang login
header('Location: login.php');
