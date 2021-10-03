<!doctype html>
<?php
session_start();
if($_SESSION["log"]!=true)
{
    header("location:login.php?error=1");
}
?>
<?php
$modelname = $_REQUEST['modelname'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
<body>

<!--- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Online Mobile Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <br>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mobile.php">Mobiles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="logout.php">Logout</a>
          </li>
        </ul>
      <form class="d-flex" method="post">
        <?php
        if(empty($_SESSION['id']))
        {
          ?>
        <button class="btn btn-outline-success" name="login" href="login.php">Log In</button>
        <?php
        }
        else
        {
          ?>
          <button class="btn btn-outline-success" name="logout" type="submit">Log Out</button>
          <?php
        }
        ?>
      </form>
      </div>
    </div>
  </nav>

<!--- Navbar ends --->

<div class="middle" style=" padding:40px; border:1px solid #ED2553;  width:100%;">


<br>
<br>
<div class="container" style="margin-top:40px;">
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Update your Account Details</div>
                        <div class="card-body">
                        <form action="updateprocess.php?modelname=<?php echo $modelname ?>" method="POST">
                            <table class="table table-borderless">
                            <tr>
                                    <td>
                                        <?php
                                            if(isset($_GET['success'])) {?>
                                                <div class="alert alert-success" role="alert">
                                                    Details Updated..
                                                </div>
                                            <?php
                                            }
                                        ?>
                                    </td>
                                </tr>
<?php 
include("connection.php");
$sql = "select * from tblmobile where modelname = '$modelname'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
                               <tr>
                                    <td><input required type="text" name="mobilename"  value="<?php echo $row['mobilename'];?>" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="modelname" value="<?php echo $row['modelname'];?>" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="cost" value="<?php echo $row['cost'];?>" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="stock" value="<?php echo $row['stock'];?>" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Update" class="btn btn-primary btn-full"/>
                                    </td>
                                 </tr>
                                 </tr>
                            </table>
                        </form>
                    </div>
                    </div>
                </div>
            <div class="col-md-3"></div>
        </div>
    </div>


<div class="tab-pane fade" id="manageaccount" role="tabpanel" aria-labelledby="profile-tab">
  

</div>
</body>

</html>
<?php
?>