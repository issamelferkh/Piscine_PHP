<?php
    function auth($login, $passwd) {
        if (!$login || !$passwd)
            return false;
        $compte = unserialize(file_get_contents('../private/passwd'));
        if ($compte) {
            foreach ($compte as $key => $value) {
                if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $passwd))
                    return true;
            }
        }
        return false;
    }
?>