#!/usr/bin/php
<?php
if ($argc > 1)
{
 $words = str_word_count($argv[1]);
$string = explode(' ',preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$argv[1]));
$first[] = $string[0];
unset($string[0]);
for ($i=1; $i < $words; $i++)
    $string[$i] .=  " ";
$string = array_merge($string , $first);
printf(implode($string));
echo "\n";
}
?>