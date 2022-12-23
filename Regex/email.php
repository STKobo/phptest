<?php
$emailAddresses = [
    'john@doe.fr',
    'john@localhost',
    'john+1@localhost',
    '@doe.fr',
    'john@.fr',
];
foreach ($emailAddresses as $emailAddress) {
    if (preg_match('/[\w+]+@\w+(\.\w*)?/', $emailAddress)) {
        echo "$emailAddress est au bon format.".PHP_EOL;
    } else {
        echo "$emailAddress n'est pas au bon format.".PHP_EOL;
    }
}