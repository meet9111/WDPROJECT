<?php
    $username = $_POST['username'];
    $mpassword = $_POST['mpassword'];
    
    include("connection.php");
    $sql ="select * from tblvendor where username = '$username' and mpassword = '$mpassword'";
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if($row['username'] == $username and $row['mpassword'] == $mpassword){   
        session_start();
        $_SESSION["auth"]= $username;
        $_SESSION["log"]= true;
        header("location:index.php");
    }else{
        header("location:login.php?error=1");
    }
?>
