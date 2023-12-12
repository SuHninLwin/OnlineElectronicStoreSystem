<?php
include 'database_connect.php';
$n="mike@gmail.com";
$p = "123";
$viewquery="select * from Customer where Customer_Email='". $n."' and Customer_Password='".$p."'";
 echo $viewquery."<br>";
    foreach ($db->query($viewquery) as $row){
        echo $row[0];
    }
    ?>