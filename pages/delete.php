<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="delete from `sales` where `sales_id`='$id'";
	$result=mysqli_query($conn,$sql) or die ("Wrong query".mysqli_error());
		echo "Successfull!";
	}
	else{
		echo "Cannot delete record.";
		}
