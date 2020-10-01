
<?php
include("database/connection.php");
error_reporting(1);
$serialno =$_GET['s_n'];
		$query="DELETE FROM add_product WHERE serial_no='$serialno'";
		$data=mysqli_query($conn,$query);
		if($data)
		{
			 
			?>


		<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://localhost/niceadmin/index.php">

		<?php
		}
else
{
	header("Location: https://localhost/niceadmin/404.php");
}
?>