<?php
$sentence = 'Alice was beginning to get very tired of sitting by her sister on the bank.';
if (preg_match('/Alice/', $sentence)) {
echo 'Le mot Alice est présent dans la phrase.';
} else {
echo 'Le mot Alice n\'est pas présent';
}