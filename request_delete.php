<?php
include("database/connection.php");
include("acess.php");
error_reporting(1);
 $serialno =$_GET['s_n'];
$query="DELETE FROM request WHERE serial_no='$serialno' ";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"";
	?>
<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://localhost/niceadmin/request.php">

<?php
}
else
{
	echo"not delete";
}
?>