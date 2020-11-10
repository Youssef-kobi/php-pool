#!/usr/bin/php
<?php

echo "Enter a number:";
while ($input=trim(fgets(STDIN)))
{
    
    $x = 0;
    $pos = 1;
    $input_len = strlen($input);
    echo $input;
    if(!$input)
    {
        printf(" '$input' is not a number\n");
    }
    if($input[$x] == "-")
    {
        $pos = -1;
        $x++;
    }

    while($x < $input_len )
    {
        if(is_numeric($input[$x]))
        {
            $x++;
            if($x == $input_len)
            {
                    if( intval($input[$x-1]) * $pos % 2 == 0)
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
}
?>
