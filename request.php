<?php
include("database/connection.php");
include("acess.php");
include("show_dept/show_request.php");
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

  <title> Request Item | Creative - Bootstrap 3 Responsive Admin Template</title>

   <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css?v=<?php echo time();?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css " rel="stylesheet" />
   
   
  <!-- Custom styles -->
   
 
  <link href="css/style.css?s=<?php echo time();?>" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
   

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

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
    <!--header start-->

      <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
<a href="index.php" class="logo">Stock <span class="lite">Management  </span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>

        <!--  search form end -->
      </div>

       <div class="top-nav notification-row">
    <ul class="nav pull-right top-menu">
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
     
 
        <!-- notificatoin dropdown end-->
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

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> request form</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Request</li>
               
            </ol>
          </div>
        </div>


        <div class="row">
          <div class="col-xl-6 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-pencil"></i>
              <div class="count"><?php echo $_SESSION ['req_entry'] ?> </div>
              <div class="title">Total Entries</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-xl-6 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"> <?php echo $_SESSION ['req_quantity'] ?> </div>
              <div class="title">Stock Quantity</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
            

                    
</div>






         <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                STOCK REQUIREMENT    
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="POST" action="">
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Item Name</label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="address" name="item_name" type="text" required  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Quantity</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" min="0" name="quantity" type="number" required />
                      </div>
                    </div>


                     <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">Item Configration</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" name="item_configration" type="varchar" required  />
                      </div>
                    </div>
                    
                                       
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-success" name="save" type="submit">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>



            </section>

</div>
</div>

        


<?php
if(isset($_POST['save']))
  {
    $itemname=$_POST['item_name'];
    $quantity=$_POST['quantity'];
    $itemconfigration=$_POST['item_configration'];
    $query="INSERT INTO `request`(`item_name`,`quantity`,`item_configration`) VALUES ('$itemname','$quantity','$itemconfigration')";
      $data=mysqli_query($conn,$query);
      if($query)
      {
        echo " ";
      }
      else{

        die("insert data deny because".mysqli_connect_error());
      }
    }

?>




       <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              STOCK REQUIREMENT
              
              </header>
             
              <div class="table-responsive">

              <table class="table table-striped table-advance table-hover">
                <tbody class="text-center">
                  <tr>
                    <th class="text-center"><i class="icon_profile"></i> Serial No</th>
                    <th class="text-center"><i class="icon_profile"></i> Item Name</th>
                    <th class="text-center"><i class="icon_pin_alt"></i> Quantity</th>
                    <th class="text-center"><i class="icon_mobile"></i> Item Configration</th>
                    <th class="text-center" colspan=2><i class="icon_cogs"></i> Action</th>
                          
                       
                  </tr>
<?php
      $limit=10;
      $page=isset($_GET['page']) ? $_GET['page']: 1;
      $start=($page -1) * $limit;
      $query1="SELECT * FROM request LIMIT $start, $limit";
      $data1=mysqli_query($conn,$query1);
      $total1=mysqli_num_rows($data1);
      if($total1!="")
      {     


        // & i_n=$row[item_name] & q=$row[quantity] & i_t=$row[item_configration]
        while($row=mysqli_fetch_assoc($data1))
            { 
              
              echo "<tr>
                        <td>".$row['serial_no']."</td>
                        <td>".$row['item_name']."</td>                         
                        <td>".$row['quantity']."</td>                         
                        <td>".$row['item_configration']."</td>
                        <td>
                          <div class='btn-group' >
                             <a class='btn btn-info' href='request_update.php? s_n=$row[serial_no]'>
                              <i class='icon_pencil-edit'></i> 
                              </a>
                          </div>  
                          
                          <div class='btn-group'>
                             <a class='btn btn-danger' href='request_delete.php?s_n=$row[serial_no]'>
                              <i class='icon_trash_alt'></i> 
                              </a>
                          </div>  
                        </td>
                    </tr>";
            }
}
else
 { 
  echo"no record found";
}

?>
 
            <!--pagination start-->
        


                </tbody>
              </table>
 </div>
              <?php
$query1="SELECT * FROM request";
$data1=mysqli_query($conn,$query1);
if(mysqli_num_rows($data1)>0)
{
  $total_records=mysqli_num_rows($data1);
  $total_page=ceil($total_records/$limit);

  echo' <div class="panel-body">';
 
  echo'<ul class="pagination ">';

  if($page>1){
  echo'<li><a href="request.php?page='.($page-1).'">Prev</a></li>';
}
  for($i=1; $i <=$total_page; $i++) 
  { 
    if($i==$page)
    {
      $active="active";
    }
    else{
      $active="";
    }
   echo' <li class="'.$active.'"><a href="request.php?page='.$i.'">'.$i.'</a></li>';
  }
  if($total_page>$page){
  echo'<li><a href="request.php?page='.($page+1).'">Next</a></li>';
}

  echo'</ul>';
  echo'</div>';

}


              ?>

                 
              
        </section>
      </div>
    </div>

   <!-- page end-->
    </section>
    <!--main content end-->
   
  </section>

</section>


  <!-- container section end -->
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
 