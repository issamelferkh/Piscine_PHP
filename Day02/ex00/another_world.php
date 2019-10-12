#!/usr/bin/php
<?php
if ($argc < 2)
    exit();
//echo trim(preg_replace("/[ \t\r]+/", " ", $argv[1]))."\n";

// $str = trim($argv[1]);
// echo ($str."\n");
// $str = preg_replace("/\s+/", " ", $str);
// echo ($str."\n");

echo (trim(preg_replace("/\s+/", " ", $argv[1]))."\n");
?>