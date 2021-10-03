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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mobile.html">Mobile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="signin.php">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="login.php">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="middle" style="margin:0px auto; border:1px solid #F8F9FA;  width:800px;">
       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ED2553;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
          </li>
		  <li class="nav-item">
             <a class="nav-link " id="login-tab" style="color:#BDDEFD;" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log In</a>
          </li>
       </ul>
	   <br><br>
	   <!--tab 1 starsts-->
	   <div class="tab-content" id="myTabContent">
	       <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"></div>
			    <form action="signinprocess.php" method="POST">
                <table class="table table-borderless">
                            <tr>
                                    <td>
                                        <?php
                                            if(isset($_GET['success'])) {?>
                                                <div class="alert alert-success" role="alert">
                                                    Account Created ... Go to Log In
                                                </div>
                                            <?php
                                            }
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input required type="text" name="username"  placeholder="Enter name" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="email" placeholder="Enter Email" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="password" name="mpassword" placeholder="Enter Password" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="mobilen" placeholder="Enter Mobile" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input required type="text" name="address" placeholder="Enter Address" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="submit" class="btn btn-primary btn-full"/>
                                        <input type="reset" value="Reset" class="btn btn-primary btn-full"/>
                                    </td>
                                 </tr>
                            </table>
                </form>
				<br>
			</div>
			<div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="home-tab">
			   <a href="login.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">Log In</button></a>
			   <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br>
			</div>
	   </div>
	</div>
</body>
</html>
