<?php

require __DIR__ . '/../vendor/autoload.php';

use CowSay\Cow;


$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO').PHP_EOL;
$bessie->setTongue('U').PHP_EOL;
$bessie->setPoop('@@@').PHP_EOL;
$bessie->setUdder('W');
echo $bessie;