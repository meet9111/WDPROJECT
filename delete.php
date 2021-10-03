<?php
session_start();
if($_SESSION["log"]!=true)
{
    header("location:index.php");
}
?>

<?php

$modelname = $_REQUEST['modelname'];

include("connection.php");

$sql = "delete from tblmobile where modelname='$modelname'";

mysqli_query($conn,$sql);


session_start();
$_SESSION["log"]=false;
header("location:index.php");
?>