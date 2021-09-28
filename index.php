<?php
// VARIABLES/STRINGS
echo "Hello fellowship" . PHP_EOL;
$ringBaerer = "Sauron" . PHP_EOL;
$ringMaker = "Sauron" . PHP_EOL;
$numberMembers = 9;
$isRingerOnFinger = true;
$ringBaerer = "Frodo";
$numberMembers += 1;
// $numberMembers++;
$middleEarth = "";
echo $middleEarth . PHP_EOL;
echo "Le porteur est " . $ringBaerer . PHP_EOL;

$sentence = "L'anneau est porté par $ringBaerer";
$sentence .= "et $ringMaker le recherche";
echo $sentence . PHP_EOL;
echo strtoupper($ringMaker) . PHP_EOL;
$ringMaker = strtoupper($ringMaker) . PHP_EOL;


// INCLUDE/RQUIRE
include '_header.php';

$wizzard = 'Gandalf';
require '_wizzard.php';

include '_footer.php';