#!/usr/bin/php
<?php
if ($argc == 1)
    exit();
$argv[1] = trim($argv[1]);
while (strpos($argv[1], "  ") == TRUE)
    $argv[1] = str_replace("  ", " ", $argv[1]);
$word = explode(" ",$argv[1]);
$i = 1;
while ($word[$i]) {
    echo $word[$i]." ";
    $i++;
}
echo $word[0]."\n";
?>
