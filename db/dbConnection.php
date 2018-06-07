<?php

function getConnection() {
    $con = mysqli_connect("localhost", "root", "", "medinfo");
    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    } else {
        return $con;
    }
}

function insertContact() {
    extract($_POST);
    $link = getConnection();
    $query = "insert into contact(name,email_address,phone_number, message)"
            . " values ('$name' , '$email' , '$phone' , '$message')";
    if (mysqli_query($link, $query)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function getAllDisease() {
    $link = getConnection();
    $query = "select d.patientID,d.disease,d.treatment,d.doctorID , p.name ,p.address from disease d join patients p on  
d.patientID = p.patientID ";
    $result = mysqli_query($link, $query);
    $ar = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $ar[] = $row;
    }
    return $ar;
}

function insertPatient() {
    extract($_POST);
    $link = getConnection();

    if (!empty($doctor)) {
       ECHO  $query = "insert into doctors (name,email,password, address ,  doctorRefNumber ,specialization )"
                . " values ('$name' , '$email' , '$password' , '$address' , '$docref' ,'$specialization')";
    } else {

        $query = "insert into patients(name,email,password, address)"
                . " values ('$name' , '$email' , '$password' , '$address')";
    }

    if (mysqli_query($link, $query)) {
        return TRUE;
    } else {
        return FALSE;
    }
}



function checkUser(){
     extract($_POST);
      $link = getConnection();
        if (!empty($doctor)) {
   echo  $query = "select * from  doctors where email = '$email' and password = '$password'";
   
        }else {
    echo      $query = "select * from  patients where email = '$email' and password = '$password'";
       
        }
         $result = mysqli_query($link, $query);
    $ar = [];
    while ($row = mysqli_fetch_array($result)) {
        $ar = $row;
    }
    return $ar;
}

function getMedicine() {
    $link = getConnection();
    $query = "select * from medicine ";
    $result = mysqli_query($link, $query);
    $ar = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $ar[] = $row;
    }
    return $ar;
}


function gov() {
    extract($_POST);
    $link = getConnection();
    $query = "insert into gov(message)"
            . " values ('$message')";
    if (mysqli_query($link, $query)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function getGov() {
    $link = getConnection();
    $query = "select * from gov ";
    $result = mysqli_query($link, $query);
    $ar = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $ar[] = $row;
    }
    return $ar;
}
