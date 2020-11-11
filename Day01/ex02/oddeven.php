#!/usr/bin/php
<?php

echo "Enter a number:";
$input=trim(fgets(STDIN), "\n\r");
// $input=trim(fgets(STDIN), "\n\r");
while (!feof(STDIN))
{
    $flag = 0;
    $x = 0;
    $pos = 1;
    $input_len = strlen($input);
    if(!$input)
    {
        printf(" '$input' is not a number\n");
    }
    if($input[$x] == "-" || $input[$x] == "+"  )
    {
        $x++;
        if (!is_numeric($input[$x]))
        {
            printf(" '$input' is not a number\n");
            $flag =1;
        }
        
    }

    while($x < $input_len && !$flag)
    {
        if(is_numeric($input[$x]))
        {
            $x++;
            if($x == $input_len)
            {
                    if( intval($input[$x-1])% 2 == 0)
                        printf ("The number $input is even\n");
                    else
                        echo "The number $input is odd\n";
            break;
            }
        }
        else
        {
        printf(" '$input' is not a number\n");
        break;
        }
    }
    echo "Enter a number:";
    $input=trim(fgets(STDIN), "\n\r");
}
echo "\n";
?>
