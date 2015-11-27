<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require "server_access.php";

$admin_email = "admin@slcabs.lk";
$admin_password = "admin@slcabs";

$hash_password = password_hash($admin_password, PASSWORD_BCRYPT);

//echo $hash_password;

//$Query='INSERT INTO administrator VALUES (\''.$admin_email.'\', \''.$hash_password.'\')';
$x = $conn->query($Query);
if ($x === TRUE){
    echo "\nCompleted.\n";
}
else{
    echo "Error: ". $Query."<br>". $conn->error;
}
?>