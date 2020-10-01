
<?php
 
include"database/connection.php";

// show all entry

$query="SELECT * FROM add_product";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!="")
{
	$_SESSION ['total_entry'] = $total;



}

// show all total amount

$query="SELECT SUM(total_amount) AS sum FROM add_product";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!="")
{


		while($row=mysqli_fetch_assoc($data))
		{
			$result=$row['sum'];
			
		}

		$_SESSION ['total_amount'] = $result;

}

// show all quantity


$query="SELECT SUM(quantity) AS sum FROM add_product";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!="")
{


		while($row=mysqli_fetch_assoc($data))
		{
			$result=$row['sum'];
			
		}

		$_SESSION ['quantity'] = $result;

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

		$_SESSION ['brand'] = $result;

}


?>