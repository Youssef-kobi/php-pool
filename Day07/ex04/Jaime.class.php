<?php
class Jaime extends Lannister
{
    public function sleepWith($x)
    {
    if($x instanceof Tyrion )
        print("Not even if I'm drunk !" . PHP_EOL);
    if($x instanceof Sansa )
        print("Let's do this".PHP_EOL);
    if($x instanceof Cersei )
        print("With pleasure, but only in a tower in Winterfell, then".PHP_EOL);
    }
}

?>