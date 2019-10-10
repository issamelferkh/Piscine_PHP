#!/usr/bin/php
<?php
while (1)
{
    echo ("Entrez un nombre: ");
    $line = trim(fgets(STDIN));
    if (feof(STDIN))
    {
        echo "\n";
        exit();
    }
    else if (is_numeric($nbr))
    {
        if ($nbr % 2 == 0)
            echo ("Le chiffre ".$nbr." est Pair\n");
        else
            echo ("Le chiffre ".$nbr." est Impair\n");
    }
    else
        echo ("'".$nbr."'"." nest pas un chiffre\n");
}
?>