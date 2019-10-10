#!/usr/bin/php
<?php
$i = 1;
if ($argc == 2)
{
    $argv[1] = trim($argv[1]);
    while ((strpos($argv[1], "  ")) == TRUE)
        $argv[1] = str_replace("  ", " ", $argv[1]);
    echo ("$argv[1]\n");
}
else
    exit();
?>