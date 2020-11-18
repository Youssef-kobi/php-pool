<?php
if(!file_exists("../private"))
    mkdir("../private");
if(!($_POST['submit'] === 'OK') || $_POST['login'] === '' || $_POST['passwd'] === '')
{
    echo "ERROR\n";
    exit;
}
if(!file_get_contents("../private/passwd"))
{
    $array[] =  array('login'=> $_POST['login'],'passwd'=> $_POST['passwd']);
    file_put_contents("../private/passwd", serialize($array));
}
else{
    $array = unserialize( file_get_contents("../private/passwd"));
    foreach ($array as $key => $value) 
    {
        if ($array[$key]['login'] === $_POST['login'])
        {
            echo "ERROR\n";
            exit;
        }
    }
    $array[] = array('login'=> $_POST['login'],'passwd'=> $_POST['passwd']);
    file_put_contents("../private/passwd", serialize($array));
    }

?>