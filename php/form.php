<?php
    $email = $_POST['email_address'];
    function filter_email($form_field) {
        return preg_replace('/[\0\n\r\|\!\/\<\>\^\$\%\*\&]+/','',$form_field);
    }
    $message = "test";
    $message = wordwrap($message, 70);
    $sent = mail($email, 'Taakverdeling', $message, 'From: ryanjvanes@gmail.com\n');
    if ($sent) {
        echo "<h1>Check je mail voor de taak verdeling.</h1>";
    } else {
        echo "<h1>Error.</h1>";
    }
?>