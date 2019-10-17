#!/usr/bin/php
<?php
if ($argc != 4){
    echo "Incorrect Parameters\n";
    exit();
}
switch (trim($argv[2])) {
    case "+":
        $result = trim($argv[1]) + trim($argv[3]);
        break;
    case "-":
        $result = trim($argv[1]) - trim($argv[3]);
        break;
    case "*":
        $result = trim($argv[1]) * trim($argv[3]);
        break;
    case "/":
        $result = trim($argv[1]) / trim($argv[3]);
        break;
    case "%":
        $result = trim($argv[1]) % trim($argv[3]);
        break;
}
echo $result."\n";
?>