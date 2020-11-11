#!/usr/bin/php
<?php

function ft_sort($a , $b)
{
    $a = strtolower($a);
    $b = strtolower($b);
    if ($a == $b) {
        return 0;
    }
    if ((ctype_alpha($a) && !(ctype_alpha($b))) || (is_numeric($a) && !(is_numeric($b)) && !(ctype_alpha($b))))
        return (-1);
    else if ((ctype_alpha($b) && !(ctype_alpha($a))) || (is_numeric($b) && !(is_numeric($a)) && !(ctype_alpha($a))))
        return (1);
    return ($a < $b) ? -1 : 1;
}

function ft_init($a , $b)
{
    $i = 0;
    while (!$res = ft_sort($a[$i], $b[$i]))
        $i++;
    return ($res);
}
$result = [];
$x = 1;
while($x < $argc)
{
    $string = explode(' ',preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$argv[$x++]));
    $result = array_merge($result,$string);
    
}
usort($result, 'ft_init');
foreach ($result as $key) {
    printf($key ."\n");
}
?>