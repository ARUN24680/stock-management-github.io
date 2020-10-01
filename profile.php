
<?php
include("database/connection.php");
include("acess.php");

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Profile- Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css?v=<?php echo time();?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css " rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css?s=<?php echo time();?>" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

 
<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg ">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" ><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Stock <span class="lite">Management  </span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->


        <ul class="nav top-menu">
          <li>
            <form class="navbar-form  ">
              <input class="form-control" id="myinput" name="search" placeholder="Search" type="text">  
            </form>
          </li>
        </ul>

        <!--  search form end -->
 
      </div>
 
  <div class="top-nav notification-row">
    <ul class="nav pull-right top-menu  ">
       <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                   <img alt="" src="img/smith.png"> 
                </span>
                <span class="username" uppercase> 
                  <?php echo strtoupper($_SESSION ['username'] )?> 
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <div class="log-arrow-up"></div>
                    <li>
                        <a href="profile.php"><i class="icon_profile"></i>PROFILE</a>
                    </li>
                   
                    <li>
                        <a href="change_password.php"><i class="icon_key_alt"></i>CHANGE PASSWORD</a>
                    </li>
                     <li>
                        <a href="logout.php"><i class="icon_key"></i> LOG OUT</a>
                    </li>
                    
                    
            </ul>
        </li>
          <!-- user login dropdown end -->
    </ul>
        <!-- notificatoin dropdown end-->
  </div>
</header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Products</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="add_products.php">Add Product</a></li>
            </ul>
          </li>
      <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Issue To Dept</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="issue_to_dept.php">Issue Product </a></li>
               
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Dept Issue</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>            
            <ul class="sub">
              <li><a class="" href="it_dept.php">IT Dept</a></li>
              <li><a class="" href="english_dept.php">English Dept</a></li>
              <li><a class="" href="jmc_dept.php">Jmc Dept</a></li>
              <li><a class="" href="punjabi_dept.php">Punjabi Dept</a></li>
              <li><a class="" href="mathematic_dept.php">Mathematic Dept</a></li> 
              
            </ul>
          </li>
        <li>
            <a class="" href="request.php">
                          <i class="icon_pencil_alt"></i>
                          <span>Request</span>
                      </a>
          </li>
          <li>
            <a class="" href="report.php">
                          <i class="icon_datareport"></i>
                          <span>Report</span>

                      </a>

          </li>

          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
<?php


      $query="SELECT * FROM login WHERE id = '1' ";
      $data=mysqli_query($conn,$query);
      $total=mysqli_num_rows($data);
      if($total!="")
      {
        while($row=mysqli_fetch_assoc($data))
            {




?>
 <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_profile"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
     
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4 class="text-warning"><?php echo $row['first'] ." ".$row['last'] ?> </h4>
                  <div class="follow-ava">
                    <img src="img/smith.png" alt="">
                  </div>
                  <h6>Administrator</h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  <p>Hello I’m <span class="text-warning"><?php echo $row['first'] ." ".$row['last'] ?></span>, a leading expert in interactive and creative design.</p>
                  <p><?php echo $row['email'] ?> </p>
                  <p> <?php echo $row['mobile'] ?> </p>
                   
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">

                      <i class="fa fa-comments fa-2x"> </i><br> Contrary to popular belief, Lorem Ipsum is not simply
                    </li>

                  </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">

                      <i class="fa fa-bell fa-2x"> </i><br> Contrary to popular belief, Lorem Ipsum is not simply
                    </li>

                  </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">

                      <i class="fa fa-tachometer fa-2x"> </i><br> Contrary to popular belief, Lorem Ipsum is not simply
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-home"></i>
                                          Profile
                                      </a>
                  </li>
                 
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                  </li>
                </ul>
              </header>


              <div class="panel-body">
                <div class="tab-content">
                      <div id="profile" class="tab-pane active">
                    <section class="panel">
                      <div class="bio-graph-heading">
                         Hello I’m <span class="text-warning"> <?php echo $row['first'] ." ".$row['last'] ?> </span>, a developer expert in interactive and creative web development specializing in the php. My graduation from gndu University with a Bachelor of computer arts
                      </div>
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>First Name </span>: <?php echo $row['first'] ?>   </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Last Name </span>:  <?php echo $row['last'] ?>   </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Email </span>:  <?php echo $row['email'] ?>   </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Country </span>:  <?php echo $row['country'] ?>     </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Occupation </span>:  <?php echo $row['occupation'] ?>    </p>
                          </div>                         
                          <div class="bio-row">
                            <p><span>Mobile </span>:   <?php echo $row['mobile'] ?>    </p>
                          </div>
                           
                        </div>
                      </div>
                    </section>
                  
                  </div>
                  <!-- profile -->
  <?php
  }
}


  ?>            
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form" method="POST" action="">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="first" placeholder="enter first name ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="last" placeholder="enter first name "
                              required>
                            </div>
                          </div>
                         <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="email" placeholder="enter email"required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Country</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="country" placeholder= "enter country "required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Occupation</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="occupation" placeholder="enter occupation " required>
                            </div>
                          </div>                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="mobile" placeholder="enter mobile number "required>
                            </div>
                          </div>
                           

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" name="submit" class="btn btn-success">Save</button>
                              <a type="submit" class="btn btn-danger" href="index.php">Cancel</a>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
                  </div>
                  </div>

                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    
  </section>
  <!-- container section end -->

  <?php
  if(isset($_POST['submit'])){


    $fname=$_POST['first'];
    $lname=$_POST['last'];
    $em =$_POST['email'];
    $cou =$_POST['country'];
    $occ =$_POST['occupation'];
    $mob =$_POST['mobile'];
    $query="UPDATE login SET `first`='$fname', `last`='$lname',`email`='$em', `country`='$cou',`occupation`='$occ', `mobile`='$mob'  WHERE `id`='1' ";
    $data=mysqli_query($conn,$query);
      if($query)
      {
       echo"";

       ?>
     <META HTTP-EQUIV="refresh" CONTENT="0; URL=http://localhost/niceadmin/profile.php">
<?php
      }

 
      else
      {
        die("insert data deny because".mysqli_connect_error());
      }
  }
  ?>
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  
</body>

</html>

