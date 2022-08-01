<?php
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if (trim($email) == '')
    $error = "Input your message";
else if (strlen(trim($message)) == '')
    $error = "Message must be 10 symbols min";

if ($error != ''){
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Message")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail('danila.kuzya@mail.ru', $subject, $message, $headers);

header('Location: online_gym/about.php')
?>