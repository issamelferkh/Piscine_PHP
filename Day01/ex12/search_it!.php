#!/usr/bin/php
<?php
    if ($argc < 3) 
        exit();
    $search = $argv[1];
    unset($argv[0], $argv[1]);
    $argv = array_reverse($argv); //start from last ---> look at subject exemlpe 
    foreach ($argv as $v)
    {
        $tmp = explode(":", $v);
        /*
        ===>  tmp table = argv table without ":"
        foreach ($tmp as $tmptmp )
            echo "tmp ===> ".$tmptmp."\n";

        ===> other method to print tmp array
        echo "tmp ===> ".$tmp[0]."\n";
        echo "tmp ===> ".$tmp[1]."\n";
        */
        if ($search === $tmp[0])
        {
            echo $tmp[1]."\n";
            exit();
        }
    }
