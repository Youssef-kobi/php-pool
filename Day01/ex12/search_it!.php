#!/usr/bin/php
<?php
$x = 1 ;
$array=[] ;
if($argc > 2)
{
    $key = preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$argv[$x]);
    while ($x < $argc - 1)
    {
        $string = explode(':',preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$argv[++$x]));

        $ass_array = array($string[0] => $string[1]);
        
        $array = array_merge($array ,$ass_array);
        unset($ass_array);
    }
    if(array_key_exists($argv[1],$array))
        printf($array[$argv[1]]."\n");
}
