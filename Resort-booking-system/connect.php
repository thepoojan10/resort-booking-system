<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mobilenum = $_POST['mobilenum'];
    $packages = $_POST['packages'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $conn = new mysqli('localhost','root','','booking');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(firstname,lastname,email,dob,mobilenum,packages,checkin,checkout) 
            values(?,?,?,?,?,?,?,?)");
        $stml->bind_param("sssiisss", $firstname, $lastname,  $email, $dob, $mobilenum, $packages, $checkin, $checkout)
        $stml->execute();
        echo "Registration Successfully..."
        $stml->close();
        $conn->close();

    }

?>