
<?php
include("database/connection.php");
include("acess.php");
include("show_dept/show_index.php");

 


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

  <title>Creative - Dashboard</title>

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
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 ">
            <div class="info-box blue-bg">
              <i class="fa fa-pencil"></i>
              <div class="count"><?php echo $_SESSION ['total_entry'] ?> </div>
              <div class="title">Total Entries</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-4 col-md-4 col-sm-4  ">
            <div class="info-box brown-bg">
              <i class="fa fa-rupee"></i>
              <div class="count"> <?php echo $_SESSION ['total_amount'] ?> </div>
              <div class="title">Total Amount</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-4 col-md-4 col-sm-4 ">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"> <?php echo $_SESSION ['quantity'] ?> </div>
              <div class="title">Stock Quantity</div>
            </div>
            <!--/.info-box-->
          </div>


</div>

        <!-- <div class="form-group">
          <span>

        SELECT : &nbsp;&nbsp;
         </span>
          
              <select class="btn btn-default" name="show">
                                  <option>Show</option>
                                  <option  value=10>10</option>
                                  <option  value=25>25</option> 
                                  <option  value=50>50</option>                                 
                                </select>

         </div>
       </br><br> -->

 


  <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading ">
                PRESENT STOCK 
              </header>
              <div class="table-responsive">



              <table class="table table-striped table-advance table-hover  " >
                <tbody  class="text-center">
                  <tr class="">
                    <th class="text-center"><i class="icon_pencil"></i> Serial No</th>
                    <th class="text-center"><i class="icon_document_alt"></i> Item Name</th>
                    <th class="text-center"><i class="icon_tags_alt"></i> Brand</th>
                    <th class="text-center"><i class="icon_calendar"></i> Purchase Date</th>
                    <th class="text-center"><i class="icon_like"></i> Quantity</th>
                    <th class="text-center"><i class="fa fa-rupee"></i> Per Amount</th>
                    <th class="text-center"><i class="fa fa-rupee"></i> Total Amount</th>
                    <th class="text-center"><i class="icon_pencil"></i> Company Detail</th>
                    <th class="text-center"><i class="icon_tool"></i> condition</th>
                    <th class="text-center" colspan=2><i class="fa fa-cogs"></i> Action</th>
                  </tr>
  <?php
   
      $limit=10;
      $page=isset($_GET['page']) ? $_GET['page']: 1;
      $start=($page -1) * $limit;

      $query="SELECT * FROM add_product LIMIT $start, $limit ";
      $data=mysqli_query($conn,$query);
      $total=mysqli_num_rows($data);
      if($total!="")
      {
        while($row=mysqli_fetch_assoc($data))
            {


  ?>

              <tr>
              <td><?php echo $row['serial_no'] ?></td>
              <td><?php echo $row['item_name'] ?></td>
              <td><?php echo $row['brand']?></td>
              <td><?php echo $row['purchase_date']?></td>
              <td><?php echo $row['quantity']?></td>
              <td><?php echo $row['per_amount']?></td>
              <td><?php echo $row['total_amount']?></td>
              <td><?php echo $row['company_detail']?></td>
              <td><?php echo $row['condition']?></td>
              <td>
 

                <div class='btn-group'>
                    <a class='btn btn-info' data-placement='bottom'  title='UPDATE' href="update.php?sn=<?php echo $row['serial_no'] ?> ">

<!-- 
                       & i_n=<?php echo $row['item_name'] ?> & b=<?php echo $row['brand']?> & p_d=<?php echo $row['purchase_date']?> & q=<?php echo $row['quantity']?> & p_a=<?php echo $row['per_amount']?> & t_a=<?php echo $row['total_amount']?> & c_d=<?php echo $row['company_detail']?> & c=<?php echo $row['condition']?>

                      -->  
                    <i class='icon_pencil-edit'> </i>
                    </a>
                </div>  
 
               
                <div class='btn-group'>
                  <a class='btn btn-danger' data-placement='bottom'  title='DELETE' 
                     href="delete.php?s_n=<?php echo $row['serial_no']?>" >
                  <i class='icon_trash_alt'></i>
                  </a>
                </div>  
              </td>
                    </tr>








 
          <!-- modal update -->

        <!--   <div class="modal fade" id="model_update" >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Update Record</h4>
                      </div>
                      <div class="modal-body">
                        Are You Sure
                      </div>
                      <div class="modal-footer">


                       <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        
                        <a class='btn btn-danger'  href="update.php?s_n=<?php echo $row['serial_no'] ?>" >
                         Update
                        </a>

                         
                      </div>
                    </div>
                  </div>
                </div>
 -->



            <!-- modal delete -->

 

  
                <!--   <div class="modal fade" id="model_delete" >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"  >&times;</button>
                        <h4 class="modal-title"> Delete Record</h4>
                      </div>
                      <div class="modal-body">
                        Are You Sure
                      </div>
                      <div class="modal-footer">


                       <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        
                        <a class='btn btn-danger' href="delete.php?s_n=<?php echo $row['serial_no']?>" >
                          Delete 
                        </a>

                         
                      </div>
                    </div>
                  </div>
                </div> -->
  




  <?php


    }
}
else
 {
  echo"No Record Available";
}

?>

                </tbody>
              </table>
            </div>

<?php
$query1="SELECT * FROM add_product";
$data1=mysqli_query($conn,$query1);
if(mysqli_num_rows($data1)>0)
{
  $total_records=mysqli_num_rows($data1);
  $total_page=ceil($total_records/$limit);


 echo' <div class="panel-body">';
  echo'<ul class="pagination ">';

  if($page>1){
  echo'<li><a href="index.php?page='.($page-1).'">Prev</a></li>';
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
   echo' <li class="'.$active.'"><a href="index.php?page='.$i.'">'.$i.'</a></li>';
  }
  if($total_page>$page){
  echo'<li><a href="index.php?page='.($page+1).'">Next</a></li>';
}

  echo'</ul>';
echo'</div>';
}
?>




                    
                   
                  
                
            


            </section>
          </div>
        </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->


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
