#!/usr/bin/php
<?php
if ($argc != 4)
{
    echo ("Incorrect Parameters\n");
    exit();
}
else
{
    $i = 1;
    while ($i < $argc)
    {
        $argv[$i] = trim($argv[$i]);
        $i++;
    }
    if ($argv[2] == "+")
    {
        $result = $argv[1] + $argv[3];
        echo ($result."\n");
    }
    else if ($argv[2] == "-")
    {
        $result = $argv[1] - $argv[3];
        echo ($result."\n");
    }
    else if ($argv[2] == "*")
    {
        $result = $argv[1] * $argv[3];
        echo ($result."\n");
    }
    else if ($argv[2] == "/")
    {
        $result = $argv[1] / $argv[3];
        echo ($result."\n");
    }
    else if ($argv[2] == "%")
    {
        $result = $argv[1] % $argv[3];
        echo ($result."\n");
    }
}
/*
if ($argc != 4) 
{
    echo "Incorrect Parameters\n";
    exit();
}
switch (trim($argv[2])) 
{
    case ("*"):
        echo trim($argv[1]) * trim($argv[3]);
        break;
    case ("+"):
        echo trim($argv[1]) + trim($argv[3]);
        break;
    case ("-"):
        echo trim($argv[1]) - trim($argv[3]);
        break;
    case ("/"):
        echo trim($argv[1]) / trim($argv[3]);
        break;
    case ("%"):
        echo trim($argv[1]) % trim($argv[3]);
        break;
}
echo "\n";
*/
?>