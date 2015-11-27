<?php

$servername = 'u320613604_slcab';
$username = 'u320613604_slcab';
$password = '1234567';
$dbname = 'slcab';

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn -> connect_error){
	die("Connection failed : ".$conn -> connect_error);
}

























