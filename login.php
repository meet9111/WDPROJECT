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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mobile.html">Mobile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signin.php">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="login.php">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="middle" style=" position:fixed; padding:40px; border:1px solid #ED2553; left:30%; top:30%; width:400px;">
       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ED2553;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="home" aria-selected="true">Vendor Login</a>
          </li>
         
              <a class="nav-link" id="profile-tab" style="color:white;"    aria-controls="profile" aria-selected="false">Welcome</a>
          
       </ul>
	   <br><br>
	   <div class="tab-content" id="myTabContent">
	   <!--login Section-- starts-->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"></div>
			  <form action="loginprocess.php" method="post">
           <table class ="table table-borderless">
                                    
                                    <tr>
                                        <td>
                                            <?php
                                                if(isset($_GET['error'])) {?>
                                                    <div class="alert alert-danger" role="alert">
                                                        Invalid Username / Password
                                                    </div>
                                                <?php
                                                }
                                            
                                            ?>
                                        </td>
                                    </tr>
    
    
                                    <tr>
                                        <td><input type="text" required name="username" placeholder="Enter Username" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="password" required name="mpassword" placeholder="Enter Password" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" class="btn btn-warning fullwidth"/></td>
                                    </tr>
                                </table>  
                          <a href="signin.php"><button type="button" name="new" class="btn btn-warning">Sign Up for New Account</button></a>
                 </form>
			</div>
			<!--login Section-- ends-->
			
			
            
      </div>
	  </div>
	   
</body>
</html>