<?php
    $email = $_POST['email_address'];
    $message = "test";
    $message = wordwrap($message, 70);
    if (mail($email, 'Taakverdeling', $message, 'From: automail@localhost')) {
        echo "<h1>Check je mail voor de taak verdeling.</h1>";
    } else {
        echo "<h1>Error.</h1>";
    }
?>