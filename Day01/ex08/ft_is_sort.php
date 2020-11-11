<?php
function ft_is_sort($str)
{
    $string = $str;
    if (sort($string) ===  $str) 
        return (1);
    return (0);
}
?>