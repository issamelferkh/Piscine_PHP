#!/usr/bin/php
<?php
if ($argc != 2) 
{
    echo "Incorrect Parameters\n";
    exit();
}
$calcule = str_replace(" ", "", $argv[1]);
echo "Calcule ===>".$calcule."\n";

$nbr1 = intval($calcule);
echo "nbr1 ===>".$nbr1."\n";

$tmp1 = substr($calcule, strlen((string)$nbr1));
echo "tmp1 ===>".$tmp1."\n";

$operation = substr($tmp1, 0, 1);
echo "Operation ===>".$operation."\n";

$tmp2 = substr($calcule, strlen((string)$nbr1));
echo "tmp2 ===>".$tmp2."\n";

$nbr2 = substr($tmp2, 1);
echo "nbr2 ===>".$nbr2."\n";

if (!is_numeric($nbr1) || !is_numeric($nbr2))
{
    echo "Syntax Error\n";
    exit();
}
switch ($operation) 
{
    case ("*") :
        echo $nbr1 * $nbr2;
        break;
    case ("+") :
        echo $nbr1 + $nbr2;
        break;
    case ("-") :
        echo $nbr1 - $nbr2;
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