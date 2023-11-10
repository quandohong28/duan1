<?php

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
            if (isset($_POST["login_submit"]) && $_POST["login_submit"] == "") {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $data = array(
                    'username' => $username,
                    'password' => $password
                );
                $jsonData = json_encode($data);
                header('Content-Type: application/json; charset=utf-8');
                echo $jsonData;
            }
            break;

        default:
            break;
    }
}
