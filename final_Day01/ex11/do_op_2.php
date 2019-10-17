#!/usr/bin/php
<?php
if ($argc != 2) 
{
    echo "Incorrect Parameters\n";
    exit();
}
$calcule = str_replace(" ", "", $argv[1]);
$nbr1 = intval($calcule);
$tmp1 = substr($calcule, strlen((string)$nbr1));
$operation = substr($tmp1, 0, 1);
$tmp2 = substr($calcule, strlen((string)$nbr1));
$nbr2 = substr($tmp2, 1);
if (!is_numeric($nbr1) || !is_numeric($nbr2))
{
    echo "Syntax Error\n";
    exit();
}
switch ($operation) 
{
    case ("+") :
        echo $nbr1 + $nbr2;
        break;
    case ("-") :
        echo $nbr1 - $nbr2;
        break;
    case ("*") :
        echo $nbr1 * $nbr2;
        break;
    case ("/") :
        echo $nbr1 / $nbr2;
        break;
    case ("%") :
        echo $nbr1 % $nbr2;
        break;
    default:
        echo "Syntax Error\n";
        exit();
}
echo "\n";
?>