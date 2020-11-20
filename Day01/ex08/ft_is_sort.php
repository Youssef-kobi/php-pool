<?php
function ft_is_sort($str)
{
    $string = $str;
    $rstring = $str;
    sort($string);
    rsort($rstring);
    if ($string ===  $str || $rstring === $str) 
        return (1);
    return (0);
}
?>