#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
    $tab_sorted = $tab;
    sort($tab_sorted);

    foreach ($tab as $tab_element)
    {
        echo ("Tab input ===>".$tab_element."\n");
    }
    echo ("=========================================\n");
    foreach ($tab_sorted as $tab_sorted_element)
    {
        echo ("Tab Sorted ==>".$tab_sorted_element."\n");
    }
    if ($tab == $tab_sorted)
        return (1);
    else
        return (0);
    if (array_diff_assoc($tab, $tab_sorted) == null)
        return true;
    return false;
}

$tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
$tab[] = "Et qu’est-ce qu’on fait maintenant ?";
//$tab = array("12","5","19");
if (ft_is_sort($tab))
    echo "Le tableau est trie\n";
else
    echo "Le tableau n’est pas trie\n";

/*Just a function so the main is juste for test */
/*
    function ft_is_sort($array){
        $array_sort = $array;
        sort($array_sort);
        if (array_diff_assoc($array_sort, $array) == null)
            return true;
        return false;
    }
*/
?>