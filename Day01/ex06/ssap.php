#!/usr/bin/php
<?php
if ($argc == 1)
    exit();
$a = 1;
$str = " ";
while ($a < $argc) {
    $str .= $argv[$a]." ";
    $a++;
}
$str = trim($str);
while (strpos($str, "  ") == TRUE)
    $str = str_replace("  ", " ", $str);
$word = explode(" ", $str);
sort($word);
foreach ($word as $w)
    echo $w."\n";
?>