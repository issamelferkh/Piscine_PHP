<?php
class Jaime {
    public function sleepWith($var) {
        if ($var instanceof Tyrion)
            print("Not event if I'm drunk !" .PHP_EOL); 
        else if ($var instanceof Sansa)
            print("Let's do this." .PHP_EOL);
        else if ($var instanceof Cersei)
            print("With pleasure, but only in a tower in Winterfell, them." .PHP_EOL);
    }
}
?>