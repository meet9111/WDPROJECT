<?php

$modelname = $_REQUEST['modelname'];

include("connection.php");

$sql = "delete from tblmobile where modelname='$modelname'";

mysqli_query($conn,$sql);

header("location:index.php");
?>
