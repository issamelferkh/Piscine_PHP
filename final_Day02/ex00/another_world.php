#!/usr/bin/php
<?php
if ($argc < 2)
    exit();
echo trim(preg_replace("/ +|\t+/", " ", $argv[1]))."\n";
?>