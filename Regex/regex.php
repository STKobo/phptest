<?php
$subject = 'Comment chercher une chaîne dans une autre ?';
$pattern = '/chaîne/';
preg_match($pattern, $subject, $matches);
var_dump($matches);