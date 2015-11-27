<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include (".\config.php");

  
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

function test_input($string){}

function admin_login($conn, $email, $password){
    if ($email == NULL or $password == NULL or $email == "" or $password == ""){
        return FALSE;
    }
    $Query = "SELECT * FROM administrator WHERE admin_email = '$email'";
    $result = $conn->query($Query);
    $data = mysqli_fetch_assoc($result);
    $hashed = $data['admin_password'];
    
    $state = password_verify($password, $hashed);
    return $state;
}

function customer_login($conn, $email, $password){
    
}

function view_reservation($conn, $startdate, $enddate){
    if ($conn!= "" and $startdate!= ""  and  $enddate!= "" ){
        return $conn->query("SELECT * FROM reservation where pickUpDate >= '$startdate' and dropOffDate <= '$enddate'") ;
        
    }
}

function add_vehicle($conn, $vehicleName, $vehicleType, $registrationNo, $seatingCapacity, $enginecap, $vehicleOp, $for1week, $for2week, $mileLimit, $excess, $photo, $phototype, $photosize){
    if ($vehicleName != "" and $vehicleType != "" and $registrationNo != "" and $seatingCapacity != "" and $enginecap != "" and $vehicleOp != "" and $for1week != "" and $for2week != "" and $mileLimit != "" and $excess != ""){
        $Query = ("INSERT INTO vehicledetails values('$vehicleName', '$vehicleType', '$registrationNo', '$seatingCapacity', '$enginecap', '$vehicleOp', $for1week, $for2week, $mileLimit, $excess, '$photo', '$phototype', '$photosize')");
        $res = $conn->query($Query);
        
    }
}

function modify_vehicle($conn, $vehicleID, $vehicleName="", $vehicleType="", $registrationNo="", $seatingCapacity="", $enginecap="", $vehicleOp="", $for1week="", $for2week="", $mileLimit="", $excess="", $photo="", $phototype="", $photosize=""){}

function view_vehicle($conn, $vehicle = ""){
    $option = "";
    if ($vehicle == ""){
        $option ="WHERE vehicleID = '$vehicle'" ;
    }
    $query = "SELECT * FROM vehicledetails ".$option;
    $res = $conn->query($query);
    return $query;
    
}

function delete_vehicle($vehicle, $conn){
    if ($vehicle == ""){
        return FALSE;
    }
    $query = "DELETE FROM vehicledetails WHERE vehicleID = '$vehicle'";
    $res = $conn->query($query);
    return $query;
}