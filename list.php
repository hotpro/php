#!/usr/bin/php
<?php
$file = $_SERVER["argv"][1];
echo "\nListing file '$file': \n\n";

$data = file($file);
$n = 1;
foreach ($data as $line) {
    echo "$n line: $line";
    $n++;
}

echo "\n\nEnd of file : '$file'\n\n";
?>
