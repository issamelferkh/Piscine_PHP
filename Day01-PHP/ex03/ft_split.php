#!/usr/bin/php
<?php
    function ft_split($str)
	{
		$word = explode(" ", $str);
		$sort_word = array_values(array_filter($word));
		sort($sort_word);
		return ($sort_word);
	}
/* main juste pour le test il faut la supp avant de pusher*/
echo ("add str\n");
$str = trim(fgets(STDIN));
$str_split = ft_split($str);
foreach ($str_split as $word)
{
    echo "[i] => ";
    echo $word;
    echo ("\n");
}
?>