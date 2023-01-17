<?php

require_once 'Email.php';

try {
    $email = new Email("Mon email");
    var_dump($email);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

