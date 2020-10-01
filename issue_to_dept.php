<?php
include("database/connection.php");
include("acess.php");
error_reporting(0);

?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Issue To Dept | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
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


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips"  ><i class="icon_menu"></i></div>
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
              <li><a class="" href="issue_to_dept.php">Issue product </a></li>
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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>department issue</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">HOME</a></li>
              <li><i class="icon_document_alt"></i>Issue Product</li>
              <li><i class="fa fa-file-text-o"></i>Form</li>
            </ol>
          </div>
        </div>
       
        <div class="row">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Basic Forms
              </header>
              <div class="panel-body">
                <div class = "form">
                <form class="  form-horizontal "  method="POST" action="">
                      <div class="form-group">
                        <label class="control-label col-lg-2">Department</label>
                        <div class="col-lg-3">
                          <select class="form-control"  name="department" required />
                                                  <option >----Select Dept----</option>
                                                  <option value="It Dept">It Dept</option>
                                                  <option value="English Dept">English Dept</option>
                                                  <option value="Jmc Dept">Jmc Dept</option>
                                                  <option value="Punjabi Dept">Punjabi Dept</option>
                                                  <option value="Mathematic Dept">Mathematic Dept</option>
                                                </select>
                                              
                                                
                        </div>
                      </div>
                    <div class="form-group ">
                      <label for="lastname" class="control-label col-lg-2">Item Name</label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="lastname" name="item_name"  type="varchar" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Brand</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="brand" type="varchar" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-2">Issue Date</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="password" name="issue_date" type="date" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="confirm_password" class="control-label col-lg-2"> Issue Quantity</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="confirm_password" name="issue_quantity" type="Varchar" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">Left Quantity</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" name="left_quantity" type="varchar" required/>
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Item Discription</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="address" name="item_discription" type=" varchar" required/>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="control-label col-lg-2">Condition</label>
                        <div class="col-lg-2">
                         <input type="text" class="form-control"name="condition" id="exampleInputPassword1" placeholder="enter item company detail" value="working" readonly />
                       </div>
                    </div>




                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-success"  name="submit">submit</button>
                         
                      </div>
                    </div>
                  </form>

              </div>
            </div>
            </section>
          </div>
      </div>
    </section>
  </section>



   <!--   <div class="row">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Basic Forms
              </header>
              <div class="panel-body">
                <div class = "form">
                <form class="form-validate form-horizontal " id="feedback_form" method="POST" action="">
                      <div class="form-group">
                        <label class="control-label col-lg-2">Department</label>
                        <div class="col-lg-3">
                          <select class="form-control"  name="department" required />
                                                  <option >----Select Dept----</option>
                                                  <option value="It Dept">It Dept</option>
                                                  <option value="English Dept">English Dept</option>
                                                  <option value="Jmc Dept">Jmc Dept</option>
                                                  <option value="Punjabi Dept">Punjabi Dept</option>
                                                  <option value="Mathematic Dept">Mathematic Dept</option>
                                                </select>
                                              
                                                
                        </div>
                      </div>
                    <div class="form-group ">
                      <label for="lastname" class="control-label col-lg-2">Item Name</label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="lastname" name="item_name" minlength="5" type="varchar" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Brand</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="brand" type="varchar" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-2">Issue Date</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="password" name="issue_date" type="date" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="confirm_password" class="control-label col-lg-2"> Issue Quantity</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="confirm_password" name="issue_quantity" type="Varchar" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">Left Quantity</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" name="left_quantity" type="varchar" required/>
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Item Discription</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="address" name="item_discription" type=" varchar" minlength="10"  required/>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="control-label col-lg-2">Condition</label>
                        <div class="col-lg-2">
                         <input type="text" class="form-control"name="condition" id="exampleInputPassword1" placeholder="enter item company detail" value="working" readonly />
                       </div>
                    </div>




                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-success"  name="ok">submit</button>
                         
                      </div>
                    </div>
                  </form>

              </div>
            </div>
            </section>
          </div>
      </div>
    </section>
  </section> -->





 
   <?php
if(isset($_POST['submit']))
  {
    $selectdept=$_POST['department'];
    $itemname=$_POST['item_name'];
    $brand=$_POST['brand'];
    $issuedate=$_POST['issue_date'];
    $issuequantity=$_POST['issue_quantity'];
    $leftquantity=$_POST['left_quantity'];
    $itemdiscription=$_POST['item_discription'];
    $condition=$_POST['condition'];

    $query="INSERT INTO `issue_to_dept` (`department`, `item_name`, `brand`, `issue_date`, `issue_quantity`, `left_quantity`, `item_discription`, `condition`) VALUES ('$selectdept','$itemname', '$brand', '$issuedate', '$issuequantity', '$leftquantity', '$itemdiscription','$condition')";
      $data=mysqli_query($conn,$query);
      if($query)
        {
          echo " ";
        }
      else
        {

          die("insert data deny because".mysqli_connect_error());
        }
    }

?>
            
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
   <script src="js/form-validation-script.js"></script>


</body>

</html>

