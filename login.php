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

  <title>Login Page </title>

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

    <form class="login-form"    method="POST"action=" "  >
      <div class="login-wrap">
        <p class="login-img">
           <span class="profile-ava">
                    <img alt="" src="img/lock.png">
                </span>
        </p>
        
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="username"class="form-control" id="user" autocomplete="off" placeholder="Username" > 
        </div>
 
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" id="pass" class="form-control" autocomplete="off" placeholder="Password" >
        </div>
   
        <label class="checkbox">
                <input type="checkbox" value="remember-me" > Remember me
                <span class="pull-right"> <a href="Forget.php"> Forgot Password?</a></span>
            </label>
             
        <button class="btn btn-info btn-lg btn-block"  type="submit" name="login">Login</button>
      </div>
    </form>
  </div>


 
  <?php

  
  // include("login.php");


if(isset($_POST['login']) )
  {
      $user = $_POST['username'];
      $pass = $_POST['password'];

    // if(empty($user) )
    //     {  
    //        $error1 = 'please enter correct username';
    //          
    //     }
          

    // if(empty($pass) )
    //     {
    //        $error2 = "please enter correct password";
    //     }


      $query="SELECT * FROM login WHERE username='$user' AND password='$pass' ";
      $data=mysqli_query($conn,$query);
      $result=mysqli_num_rows($data);
      if($result==1)
      {
        $_SESSION ['username'] = $user;
        header("location:index.php");
      }
      else
      {
     
        header("location:login.php");
      }
        
  }

?>


 
  

</body>

</html>
