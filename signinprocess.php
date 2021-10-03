<?php
 $username = $_POST['username'];
 $email = $_POST['email'];
 $mpassword = $_POST['mpassword'];
 $mobilen = $_POST['mobilen'];
 $address = $_POST['address'];
    

    include("connection.php");
    $sql ="insert into tblvendor(username,email,mpassword,mobilen,address) values ('$username','$email','$mpassword','$mobilen','$address')";
    
    $result = $conn->query($sql);
    
    header("location:signin.php?success=1");
?>
 