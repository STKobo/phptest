CTRL+C pour copier, CTRL+V pour coller
<?php
$emails = [
	'john@doe.fr',
	'john@localhost',
	'john+1@localhost',
	'John+1@localhost',
	'john+1@localhost+1',
	'+1@doe.fr',
	'@doe.fr',
	'john@.fr',
];
foreach ($emails as $email) {
    if (preg_match('/^[a-z][a-z0-9+]*@[a-z]+(\.[a-z]+)?$/i', $email)) {
        echo "$email est au bon format.".PHP_EOL;
    } else {
        echo "$email n'est pas au bon format.".PHP_EOL;
    }
}