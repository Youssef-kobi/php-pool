#!/usr/bin/php
<?php
    if ($argc == 2)
        printf(preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',$argv[1])."\n");
?>