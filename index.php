<?php
include_once("GoogleAuthenticator.php");

$secret = 'DDOERIHYEJRHDGSY';
$secret2 = 'GIDGMR4OYAF6KKUO';
$time = floor(time() / 30);

$g = new GoogleAuthenticator();

print "Current Code is: ";
print $g->getCode($secret);
print PHP_EOL;
print $g->getCode($secret2);