<?php

$subject = '0123456789';
$search = '456';
$pattern = "/$search/";
$offset = 5;
if (preg_match($pattern, $subject, $matches, null, $offset)) {
    echo "$search est présent dans ".substr($subject, $offset);
} else {
    echo "$search n'est pas présent dans ".substr($subject, $offset);
}