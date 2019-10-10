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

if ($argc == 1)
    exit();
$str = ft_epur_str($argv[1]);
$str = ft_split($str);
$j = -1;
foreach($str as $word)
{
    $j++;
}
// echo "1st word ===> ".$str[$j]."\n";
// $k = 0;
// foreach($str as $word)
// {
//     if ($k < $j)
//     {
//         echo "word ===> $str[$k].\n";
//         echo ("j ===> $k\n");
//         $k++;
//     }
// }

echo "$str[$j] ";
$k = 0;
foreach($str as $word)
{
    if ($k < $j)
    {
        echo "$str[$k]";
        if ($k < $j-1)
            echo (" ");
        $k++;
    }
}
?>

