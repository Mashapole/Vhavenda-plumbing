<?php

$local='localhost';
$user='root';
$password='';
$database='bookstore';

$connect=mysqli_connect($local,$user,$password,$database);

if($connect==false)
{
    echo "something is wrong with the connection";
}
else
{
    if($connect==true)
    {
        //print"The connection is working";
    }
}

?>