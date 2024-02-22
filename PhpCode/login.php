<?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red'>{$_GET['error']}</p>";
    }
?>

<form action='process_login.php' method='post'>
    Usename: <input type="text" name="user" id="">
    Pass: <input type="password" name="pass" id="">
    <button type="submit">Login</button>
    <input type="password" name="" id="">
</form>