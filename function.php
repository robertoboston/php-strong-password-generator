<?php

function randomPassword($number) {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $password = '';
    for ($i = 0; $i < $number; $i++) {
        $password = $password.$alphabet[rand(0,strlen($alphabet)-1)];
    }
    return $password;
}

?>

