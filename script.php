<?php

define("NUMBER", 42);
// const NUMBER = 42;

$fruits = ["orange", "pomme"];
// array_push($fruits, "banane", "poire");
$fruits[1] = "banane";
$fruits[3] = "poire";
$fruits[104] = "cerise";
array_push($fruits, "prune");
print_r($fruits);