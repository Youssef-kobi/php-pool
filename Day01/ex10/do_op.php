#!/usr/bin/php
<?php
if($argc == 4)
{

$a = intval($argv[1]);
$b = intval($argv[3]);



switch (preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$argv[2])) 
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
            echo "Incorrect Parameters";

    }
}
else
    echo "Incorrect Parameters";
echo "\n";

?>