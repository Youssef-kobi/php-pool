<?php
class NightsWatch {
    public $array;
    public function __construct()
    {
       $this->array = array();
    }
    public function recruit($X)
    {
        if ($X instanceof IFighter)
        {
            $this->array[]= $X; 
        }
    }
    public function fight()
    {
        foreach ($this->array as $key) {
            $key->fight();
        }
    }
}
?>