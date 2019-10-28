#!/usr/bin/php
<?php
function ft_is_sort($tab){
    $tab_sorted_asd = $tab;
    $tab_sorted_des = $tab;
    sort($tab_sorted_asd);
    rsort($tab_sorted_des);
    if (array_diff_assoc($tab, $tab_sorted_asd) == NULL)
        return (TRUE);
    else if (array_diff_assoc($tab, $tab_sorted_des) == NULL)
        return (TRUE);
    return (FALSE);
}
?>