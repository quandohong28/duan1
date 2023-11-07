<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location: main/index.php?act=home");
} else {
    header("location: login.php");
}
