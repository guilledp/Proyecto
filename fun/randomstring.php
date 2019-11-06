<?php

function generateRandomString($length) {
    $include_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars [rand(0, $charLength - 1)];
    }
    return $randomString;
}

?>
