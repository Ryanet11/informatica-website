<?php
require_once "Mail.php";

$from = '<fromaddress@gmail.com>';
$to = $_POST['email_address'];
$subject = 'Taakverdeling';
$body = "Hallo,\n\nDit is onze taak verdeling.";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'ryan.j.van.es@gmail.com',
        'password' => 'krs4pkrs4p'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
    echo('<p>to: '.$_POST['email_address'].'</p>');
}
?>
