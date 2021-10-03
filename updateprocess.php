<?php
session_start();
if($_SESSION["log"]!=true)
{
    header("location:login.php?error=1");
}
?>
<?php
    $previousmodelname = $_REQUEST['modelname'];
    $mobilename = $_POST['mobilename'];
    $modelname = $_POST['modelname'];
    $cost = $_POST['cost'];
    $stock = $_POST['stock'];
    
    include("connection.php");
    $sql1 = "update tblmobile set mobilename = '".$mobilename."', modelname = '".$modelname."', cost = '".$cost."' , stock = '".$stock."' where modelname='".$previousmodelname."'";
    echo $sqli;
    $result = $conn->query($sql1);
    session_start();
        $_SESSION["auth"]= $modelname;
    header("location:index.php");
?>
