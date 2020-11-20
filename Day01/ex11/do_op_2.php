#!/usr/bin/php
<?php
if($argc == 2)
{
    $string = explode(' ',preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$argv[1]));
    if(count($string) == 3 && is_numeric($string[0]) && is_numeric($string[2]))
    {
        $a = intval($string[0]);
        $b = intval($string[2]);
        switch ($string[1]) 
            {
                case '+':
                    printf($a + $b);
                break;
                case '-':
                    printf($a - $b);
                break;
                case '*':
                    printf($a * $b);
                break;
                case '/':
                    printf($a / $b);
                break;
                case '%':
                    printf($a % $b);
                break;
                default:
                    echo "Syntax Error";
            }
    }
    else echo "Syntax Error";
}
else
    echo "Incorrect Parameters";
echo "\n";

?>