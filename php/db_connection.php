<?php
function OpenCon() {
    #LOGIN
    $dbhost = "localhost";
    $dbuser = "INWEBSITE";
    $dbpass = "tijger11";
    $db = "inwebsite";

    #CONNECTION
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Database is unavalable");
    return $conn;
}
function CloseCon($conn) {
    $conn->close();
}
?>