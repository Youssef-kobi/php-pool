<?php
abstract class house
{
    public abstract function getHouseName();
    public abstract function getHouseSeat();
    public abstract function getHouseMotto();
    public function introduce()
    {
     print("house ".$this->getHouseName()." of ".$this->getHouseSeat()." : ".'"'.$this->getHouseMotto().'"'. PHP_EOL);
    }
}

?>