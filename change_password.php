<?php
include("database/connection.php");
include("acess.php");

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>change password| Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css?v=<?php echo time();?>" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form"  method="POST"action="">
      <div class="login-wrap">
        <p class="login-img">
          <span class="profile-ava">
                    <img alt="" src="img/lock.png">

                </span>
                <a href="index.php" type="button" class="close  bg-dark" data-dismiss="login-form">&times;</a>
        </p>
         
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="ch_user"class="form-control" id="ch_us" autocomplete="off" placeholder="Change Username" autofocus />
          
        </div>
        <div id ="error">  </div>
        
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="ch_pass" class="form-control" id="ch_ps" autocomplete="off" placeholder="Change Password" autofocus />
          
          
        </div>
        <div id ="error1">  </div>
        

        <br> 
         
        <button class="btn btn-success btn-lg btn-block" type="submit" id="submit" name="change">submit</button>
    
      </div>
    </form>
  </div>
<?php
if(isset($_POST['change']))
{
     

    $user=$_POST['ch_user'];
    $pass=$_POST['ch_pass'];

   

      $query="UPDATE login SET `username`='$user', `password`='$pass' WHERE `id`='1' ";
        $data=mysqli_query($conn,$query);
         if($query)
          {
            header("location:index.php");
          }
          else
          {
            die("insert data deny because".mysqli_connect_error());
          }

      
      
      

    
}

if(isset($_POST['cancel'])){

  header("location:index.php");
}

?>

 
 
<!-- <script type="text/javascript">
    $('#submit').click(function(){

      var user = $('#ch_us').val();
    $('#error').html('**username is required');
      $('#error').css('color','red');
   
</script> -->


</body>

</html>
<!-- 

    }); -->