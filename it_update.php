<?php
include("database/connection.php");
include("acess.php");
error_reporting(0);

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

<title> request update bootstrap 3 Responsive Admin Template</title>
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
                        <a href="logout.php"><i class="icon_profile"></i> LOG OUT</a>
                    </li>
                    <li>
                        <a href="change_password.php"><i class="icon_key_alt"></i>CHANGE PASSWORD</a>
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
    <!--sidebar end-->


   <?php


    $serialno=$_GET['s_n'];

    $geted="SELECT * FROM issue_to_dept WHERE serial_no='$serialno'";
    $result=mysqli_query($conn,$geted);
    $total=mysqli_num_rows($result);

    if($total!="")
      {
        while($row=mysqli_fetch_assoc($result))
            
            {

    ?>

    <!--main content start-->
      <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Department Issue Form</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Isuue To Dept</li>
              <li><i class="fa fa-files-o"></i>Form</li>
            </ol>
          </div>
        </div>
         <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Product Issue To Dept    
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " method="POST" action="it_dept.php">

                    <div class="form-group">
                        <label class="control-label col-lg-2">Department</label>
                        <div class="col-lg-3">
                          <select class="form-control"  name="d"  value="<?php echo $row['department'];?>" required />
                                                  <option >-Select Dept-</option>
                                                  <option value="It Dept">It Dept</option>
                                                  <option value="English Dept">English Dept</option>
                                                  <option value="Jmc Dept">Jmc Dept</option>
                                                  <option value="Punjabi Dept">Punjabi Dept</option>
                                                  <option value="Mathematic Dept">Mathematic Dept</option>
                                                </select>
                        </div>
                      </div>

                      <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Item Name</label>
                      <div class="col-lg-10">
                      <input class=" form-control" id="address" name="i_n" value="<?php echo $row['item_name']; ?>" type="varchar" required/>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Brand</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="b" value=" <?php echo $row['brand']; ?> " type="varchar" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-2">Issue Date</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="password" name="i_d" value="<?php echo $row['issue_date']; ?>" type="date" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="confirm_password" class="control-label col-lg-2"> Issue Quantity</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="confirm_password" name="i_q"value="<?php echo $row['issue_quantity']; ?>"type="Varchar" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">Left Quantity</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" name="l_q" value="<?php echo $row['left_quantity']; ?>" type="varchar" required />
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Item Discription</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="address" name="i_d"  value="<?php echo $row['item_discription']; ?>" type=" varchar"  required />
                      </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-lg-2">Condition</label>
                        <div class="col-lg-2">
                              <select class="form-control"  name="c"value="<?php echo $row['condition']; ?>" required>
                                <option >-Condition-</option>
                                <option value="working">Working</option>
                                <option value="condemed">Condemed</option>
                              </select>  
                        </div>
                      </div> 


                    
           
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-success" name="update" type="submit">Update</button>
                        <button class="btn btn-danger" href="it_dept.php" type="submit">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
              

        <!-- page end-->
    </section>
    <!--main content end-->
   </section>

</section>
 
        
<?php

   }
}

if(isset($_POST['update']))
  {
      $department=$_POST['d'];
      $itemname=$_POST['i_n'];
      $brand=$_POST['b'];
      $issuedate=$_POST['i_q'];
      $issuequantity=$_POST['i_q'];
      $leftquantity=$_POST['l_q'];
      $itemdiscription=$_POST['i_d'];
      $condition=$_POST['c'];
      
      $query="UPDATE `issue_to_dept` SET `department`='$department',`item_name`='$itemname',`brand`='$brand',`issue_date`='$issuedate',`issue_quantity`='$issuequantity',`left_quantity`='$leftquantity',`item_discription`='$item_discription',`condition`='$condition'  WHERE `serial_no`='$serialno' ";

    $data=mysqli_query($conn,$query);
    if($query)
      {
        echo "";
      }
      else
      {
        die("insert data deny because".mysqli_connect_error());
      }
}

// serial_no='$serialno' 
 
?>
              
   

  


</section>


   
   <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    
</body>

</html>


