<?php
class Tyrion {
    public function sleepWith($var) {
        if ($var instanceof Jaime)
            print("Not event if I'm drunk !" .PHP_EOL); 
        else if ($var instanceof Sansa)
            print("Let's do this." .PHP_EOL);
        else if ($var instanceof Cersei)
            print("Not event if I'm drunk !" .PHP_EOL); 
    }
}
?>