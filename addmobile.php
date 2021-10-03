<?php

 $mobilename = $_POST['mobilename'];
 $modelname = $_POST['modelname'];
 $cost = $_POST['cost'];
 $stock = $_POST['stock'];
    
 include("connection.php");
 $sql ="insert into tblmobile(mobilename,modelname,cost,stock)
  values ('$mobilename','$modelname','$cost','$stock')";
    
 $result = $conn->query($sql);
 
 header("location:index.php");
?>