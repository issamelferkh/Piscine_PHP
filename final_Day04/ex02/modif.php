<?php
    if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK") {
        $compte = unserialize(file_get_contents('../private/passwd'));
        if ($compte) {
            $yes = 0;
            foreach ($compte as $key => $value) {
                if ($value['login'] === $_POST['login'] && $value['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
                    $yes = 1;
                    $compte[$key]['passwd'] =  hash('whirlpool', $_POST['newpw']);
                }
            }
            if ($yes) {
                file_put_contents('../private/passwd', serialize($compte));
                echo "OK\n";
            } 
            else {
                echo "ERROR\n";
            }
        } 
        else {
            echo "ERROR\n";
        }
    }
    else {
        echo "ERROR\n";
    }
?>