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
?>