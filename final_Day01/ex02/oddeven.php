#!/usr/bin/php
<?php
while (true) {
    echo "Entrez un nombre: ";
    $nbr = rtrim(fgets(STDIN));
    if (feof(STDIN)) {
        echo "\n";
        exit();
    }
    elseif (is_numeric($nbr)) {
        if ($nbr%2) {
            echo "Le chiffre ".$nbr." est Impair\n";
        }
        else {
            echo "Le chiffre ".$nbr." est Pair\n";
        }
    }
    else {
        echo "'".$nbr."' n'est pas un chiffre\n";
    }
}
?>