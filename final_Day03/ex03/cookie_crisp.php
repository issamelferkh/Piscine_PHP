<?php
    switch ($_GET['action']) {
	case("set"):
		if ($_GET['name'] && $_GET['value'])
			setcookie($_GET['name'], $_GET['value'], time() + 86400, '/');
		break;
	case("get"):
		if ($_GET['name'] && $_COOKIE[$_GET['name']] && !$_GET['value'])
			echo $_COOKIE[$_GET['name']]."\n";
		break;
	case("del"):
		if ($_GET['name'] && !$_GET['value'])
			setcookie($_GET['name'], '', time() - 86400, '/n');
		break;
    }
