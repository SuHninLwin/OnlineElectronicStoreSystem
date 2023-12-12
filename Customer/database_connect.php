<?php
$servername="localhost";
$username="root";
$password="";
$dbname="UES";
try
{
    $db = new PDO("mysql:host=$servername;dbname=$dbname",
        $username,$password);
//     echo "<script type='text/javascript'>
//                alert('Connection successful');</script>";
}
catch (PDOException $e)
{
    echo "<script type='text/javascript'>
               alert('Connection fail');</script>";
    $e->getMessage();
}
?>