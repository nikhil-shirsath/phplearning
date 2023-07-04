<?php
/**
 * ways to connect with database 
 * 1.mysqli : when we connect with mysql database
 * 2.pdo : when php data object we have to connect with diffrent databases
 */


$server="localhost";    //because we are inside our computer
$user="root";       //by default username
$pass = " ";
$dbname="room/friends";

$connect = mysqli_connect($server,$user,$pass);

if(!$connect){
    die("sorry we failed to connect : ".mysqli_connect_error());
}else{
    echo "we connect sucessfully";
}

