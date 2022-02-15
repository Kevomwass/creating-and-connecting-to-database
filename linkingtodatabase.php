<?php
           //connecting to database
$server = "localhost";
$username = "root";
$passwrd = "";

$connect = new mysqli($server, $username, $passwrd);

if ($connect ->connect_error){
    die("Did not connect to database(Failed)".$connect -> connect_error());
}
//else{
//    echo "connected to database successfully";
//}

           //creating a database manually
$createdb = "CREATE DATABASE explorer1";

if ($connect->query($createdb)===TRUE){
    echo "database created succesfully";
}else{
    echo "Database not created".$connect->connect_error();
}

$connect -> close();