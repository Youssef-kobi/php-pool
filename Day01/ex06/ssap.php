#!/usr/bin/php
<?php
$result=[];
$x = 1;
while($x < $argc)
{
    $string = explode(' ',preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$argv[$x++]));
    $result = array_merge($result,$string);
    
}
sort($result);
foreach ($result as $key) {
    printf($key ."\n");
}
?>