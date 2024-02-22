<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['user'])) {
            $username = $_POST['user'];
            $password = $_POST['pass'];
            if ($username == "phu" && $password == "123") {
                header('location:admin.php');
            } else {
                header("location:login.php?error=ERROR");
            }
        }
    }