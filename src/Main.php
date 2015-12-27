<?php

require __DIR__ . '/../vendor/autoload.php';

echo "Hello World!\n";
$s = new Kurs\Super();
echo "addOne(2) returns :" . $s->addOne(2) . "\n";
?>