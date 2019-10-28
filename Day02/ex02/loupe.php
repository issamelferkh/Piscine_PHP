#!/usr/bin/php
<?php
function _toupper_($matches) {
	return strtoupper($matches[0]);
}
function _replace_tag_($matches) {
	$matches = preg_replace_callback('/(?<=title=")(?:.|\n)*(?=")/iU', '_toupper_', $matches);
	$matches = preg_replace_callback('/(?<=>)(?!<.*>)(?:.|\n)*(?=<)/iU', '_toupper_', $matches);
	return $matches[0];
}
if ($argc == 2) {
	$file = file_get_contents($argv[1]);
	$file = preg_replace_callback('/<a(.|\n)+<\/a>/iU', '_replace_tag_', $file);
	print($file);
}
?>
