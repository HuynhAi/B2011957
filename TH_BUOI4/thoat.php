<?php
session_start();


// destroy the session
session_destroy();


// Xóa cookie
setcookie('user', '', time() - 3600);

// Chuyển hướng tới trang login
header('Location: login.php');
exit;

?>