#!/usr/bin/php
<?php
function ft_split($str){
    $str = trim($str);
    while ((strpos($str, "  ") == TRUE))
        $str = str_replace("  ", " ", $str);
    $word = explode(" ", $str);
    sort($word);
    return ($word);
    
}
$nbr1 = 12;
$nbr2 = 5;
$snbr1 = (string)$nbr1;
$snbr2 = (string)$nbr2;
$str = "        ".$snbr1."         ".$snbr2."    ";
print_r(ft_split($str));
?>