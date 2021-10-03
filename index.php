<?php
session_start();
include("connection.php");
if($_SESSION["log"]!=true)
{
    header("location:login.php?error=1");
}
$username = $_SESSION["auth"];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Mobile Store</title>
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
      <a class="navbar-brand" href="index.php">Online Mobile Store</a>
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
            <a class="nav-link" href="mobile.html">Mobile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="logout.php">Logout</a>
          </li>
        </ul>
      </form>
      </div>
    </div>
  </nav>

<!--- Navbar ends --->

<div class="middle" style=" padding:40px; border:1px solid #ED2553;  width:100%;">

<!--tab heading-->
  <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ED2553;border-radius:10px 10px 10px 10px;" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#viewitem" role="tab" aria-controls="home" aria-selected="true">Manage Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#manageaccount" role="tab" aria-controls="profile" aria-selected="false">Add Products</a>
    </li>
  </ul>

<!---- Table Start ------>
<br>
<br>
  <span style="color:green;"></span>
  <div class="tab-content" id="myTabcontent">
    <div class="tab-pane fade show active" id="viewitem" role="tabpanel" aria-labelledby="home-tab">
      <div class="container"> 
        <table border="1" bordercolor="#F0F0F0" cellpadding="20px">
          <th>Mobile Name</th>
          <th>Model Name</th>
          <th>Mobile Price</th>
          <th>Stock Number</th>
          <th>Delete Item   </th>
          <th>Update item Details </th>
          
          <?php
					  if($query=mysqli_query($conn,"select * from tblmobile "))
					  {
						  if(mysqli_num_rows($query))
						  {
						 while($row=mysqli_fetch_array($query))
						 {
							 
							 ?>

           
        <tr>
          <td align="center" style="width:150px;"><?php  echo $row['mobilename']."<br>";?></td>
          <td style="width:150px;"><?php  echo $row['modelname']."<br>";?></td>
          <td align="center" style="width:150px;"><?php  echo $row['cost']."<br>";?></td>
          <td  align="center" style="width:150px;"><?php  echo $row['stock']."<br>";?></td>
          <td align="center" style="width:150px;">
          <a href="delete.php?modelname=<?php echo $row['modelname'];?>"><button type="button" class="btn btn-warning">Delete </button></a>
          </td>
          <td align="center" style="width:150px;">
          <a href="update.php?modelname=<?php echo $row['modelname'];?>"><button type="button" class="btn btn-danger">Update </button></a>
          </td>
        </tr>
        <?php 
					
                    $mobilename="";
                    $modelname="";
                    $cost="";	
                    $stock="";				
						 }
					  }
					  else 
						  
						  {
							   $msg="please add some Items";
						  }
					  }
					  else 
					  {
						  echo "failed";
					  }
					  
					  ?>
        </table>
      </div>
    </div>
   


<div class="tab-pane fade" id="manageaccount" role="tabpanel" aria-labelledby="profile-tab">
  
  <!--add Product-->
           <form action="addmobile.php" method="post" >
           <table class="table table-borderless">
                                <tr>
                                    <td><input required type="text" name="mobilename"  placeholder="Enter Mobile Name" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="modelname" placeholder="Enter Model Name" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="cost" placeholder="Enter Cost" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="stock" placeholder="Enter Stock Number" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="submit" class="btn btn-primary btn-full"/>
                                    </td>
                                 </tr>
                                
                            </table>
                  </form>

</div>
</body>

</html>
<?php
?>