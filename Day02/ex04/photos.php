#!/usr/bin/php
<?php

function grab_img($m) {
	echo"$m[0]\n";
}

function fetch($m) {
	$m = preg_replace_callback('~(http.*\.)(jpe?g|png|[tg]iff?|svg)~iU', 'grab_img', $m[0]);
}

if ($argc > 1) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $argv[1]);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$str = curl_exec($ch);
	$str = preg_replace_callback('/<img(.|\n)+>/iU', 'fetch', $str);
}

?>
