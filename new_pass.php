<?php
include("database/connection.php");
session_start();
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>forget password </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css " rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css?v=<?php echo time();?>" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form  "    method="POST"action="">
      <div class="login-wrap">
        <p class="login-img">
           <span class="profile-ava">
                    <img alt="" src="img/lock.png">
                </span>

                <div class ="text-danger text-center">Enter New Password </div>
        </p>
        

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" id="pass" class="form-control" autocomplete="off" placeholder="Password" required / >
        </div>
        
        <br><br>
             
        <button class="btn btn-info btn-lg btn-block"  type="submit" name="login">submit</button>
      </div>
    </form>
  </div>
<?php
if (isset($_POST['login']))
  {
    if (empty($_POST['password'])  )
    {
      header("location:login.php?empty=fill all fields");
    }
      
      $pass=$_POST['password'];
      $query="UPDATE login SET `password`='$pass' WHERE `id`='1' ";
      $data=mysqli_query($conn,$query);
      $result=mysqli_num_rows($data);
      if($result==1)
      {  
        header("location:login.php");
      }
      else
      {
     
        header("location:login.php");
      }
        
  }
 
?>
  
  

</body>

</html>
