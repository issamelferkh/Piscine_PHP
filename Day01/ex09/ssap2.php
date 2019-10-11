#!/usr/bin/php
<?php

function concat_args($argc, $argv)
{
    $i = 1;
    while ($i < $argc)
    {
        $str = $str." ".$argv[$i];
        $i++;
    }
    return ($str);
}

function clean_str($str)
{
    $str = trim($str);
    while ((strpos($str, "  ")) == TRUE)
        $str = str_replace("  ", " ", $str);
    return ($str);
}

function ft_sort($a, $b)
{
	$la = strtolower($a);
    $lb = strtolower($b);
	$i = 0;

	$custom_sort = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($a)) || ($i < strlen($b)))
	{
        $posa = strpos($custom_sort, $la[$i]);
        $posb = strpos($custom_sort, $lb[$i]);
        
		if ($posa < $posb)
			return (-1);
		else if ($posa > $posb)
			return (1);
		else
			$i++;
	}
}

if ($argc > 1)
{
	$str = concat_args($argc, $argv);
    $str = clean_str($str);
	$tab = explode(" ", $str);
	usort($tab, "ft_sort");
	foreach ($tab as $value)
		echo ("$value\n");
}

?>
