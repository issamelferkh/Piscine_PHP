#!/usr/bin/php
<?php
function ft_is_sort($tab){
    $tab_sorted = $tab;
    sort($tab_sorted);
    if (array_diff_assoc($tab, $tab_sorted) == NULL)
        return (TRUE);
    return (FALSE);
}

// include("ft_is_sort.php");
$tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
//$tab[] = "Et qu’est-ce qu’on fait maintenant ?";
if (ft_is_sort($tab))
    echo "Le tableau est trie\n";
else
    echo "Le tableau n’est pas trie\n";

?>