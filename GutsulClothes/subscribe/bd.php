<?php
    $db = mysqli_connect ("localhost","root","","gutsul");
    if (!$db) {
        die("MySQL connection failed: " . mysqli_connect_error());
    }
?>