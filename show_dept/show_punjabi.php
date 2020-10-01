
<?php
 
include"database/connection.php";

// show all entry

$query="SELECT * FROM issue_to_dept WHERE department='Punjabi Dept'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!="")
{
	$_SESSION ['punjabi_entry'] = $total;



}

// show all total amount

$query="SELECT SUM(issue_quantity) AS sum FROM issue_to_dept WHERE department='Punjabi Dept'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!="")
{


		while($row=mysqli_fetch_assoc($data))
		{
			$result=$row['sum'];
			
		}

		$_SESSION ['punjabi_quantity'] = $result;

}

// show all quantity


$query="SELECT SUM(left_quantity) AS sum FROM issue_to_dept WHERE department='Punjabi Dept'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!="")
{


		while($row=mysqli_fetch_assoc($data))
		{
			$result=$row['sum'];
			
		}

		$_SESSION ['punjabi_left'] = $result;

}

// total brands



$query="SELECT SUM(brand) AS sum FROM add_product where serial_no";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!="")
{


		while($row=mysqli_fetch_assoc($data))
		{
			$result=$row['sum'];
			
		}

		$_SESSION ['bran'] = $result;

}
?>