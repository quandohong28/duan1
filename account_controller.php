<?php
session_start();
include 'model/pdo.php';
include 'model/login_infomation.php';

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = login($username, $password);
                if ($user) {
                    $_SESSION['user'] = $user;
                    var_dump($_SESSION['user']);
                    header('location: index.php');
                } else {
                    $error = 'Đăng nhập thất bại';
                }
            }
            break;

        default:
            break;
    }
}
