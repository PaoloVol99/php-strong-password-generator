<?php
include __DIR__ . '/sessions.php';

$password_source = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

$password_length = $_GET['password_length'] ?? false;

$password = '';

for ($i = 0; $i < $password_length; $i++) {
    $random_index = rand(0 , (strlen($password_source) - 1));
    $password = $password . $password_source[$random_index];
    // var_dump($random_index, $password);
}

if($password !== '') {
    header('Location: password.php');
    $_SESSION['password'] = $password;
}


var_dump($password);


?>