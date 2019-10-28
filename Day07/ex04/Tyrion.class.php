<?php
class Tyrion {
    public function sleepWith($var) {
        if ($var instanceof Jaime)
            print("Not even if I'm drunk !" .PHP_EOL); 
        else if ($var instanceof Sansa)
            print("Let's do this." .PHP_EOL);
        else if ($var instanceof Cersei)
            print("Not even if I'm drunk !" .PHP_EOL); 
    }
}
?>