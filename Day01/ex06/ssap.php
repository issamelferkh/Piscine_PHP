#!/usr/bin/php
<?php
function ft_split($str)
{
    $word = explode(" ", $str);
    $sort_word = array_values(array_filter($word));
    sort($sort_word);
    return ($sort_word);
}

function ft_epur_str($str)
{
    $str = trim($str);
    while ((strpos($str, "  ")) == TRUE)
        $str = str_replace("  ", " ", $str);
    return ($str);
}

$i = 1;
if ($argc < 2)
    exit();
while ($argc > $i)
{
    $str = $str." ".$argv[$i];
    $i++;
}
$str = ft_epur_str($str);
echo ("$str\n");
$str = ft_split($str);
$j = 0;
foreach($str as $word)
{
    $j++;
}
$k = 0;
foreach($str as $word)
{
    echo $word;
    $k++;
    if ($k < $j)
        echo ("\n");
}
/*
    $array = array();
    unset($argv[0]);
    foreach($argv as $v)
    {
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            $array[] = $v2;
    }
    sort($array);
    foreach ($array as $v)
        echo $v."\n";
*/
?>

