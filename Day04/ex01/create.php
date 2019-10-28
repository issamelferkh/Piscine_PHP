<?php
if ($_POST['login'] != ""&& $_POST['passwd'] != ""&& $_POST['submit'] && $_POST['submit'] === "OK"){
    if ($_POST['login'] && $_POST['passwd']){
        if (!file_exists('../private')){
            mkdir("../private");
        }
        if (!file_exists('../private/passwd')){
            file_put_contents('../private/passwd', NULL);
        }
        $compte = unserialize(file_get_contents('../private/passwd'));
        if ($compte){
            $cpt = 0;
            foreach ($compte as $key => $value) {
                if ($value['login'] === $_POST['login']){
                    $cpt = 1;
                }
            }
        }
        if ($cpt){
            echo "ERROR\n";
        }
        else{
            $tmp['login'] = $_POST['login'];
            $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
            $account[] = $tmp;
            file_put_contents('../private/passwd', serialize($account));
            echo "OK\n";
        }
    }
}
else{
    echo "ERROR\n";
}
?>