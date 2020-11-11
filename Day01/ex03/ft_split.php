#!/usr/bin/php
<?php

function ft_split($str)
{
$array = explode(' ',preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$str));
sort($array);
return($array);
}
?>