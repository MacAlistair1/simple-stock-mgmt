<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="select * from `student_info` where `id`='$id'";
	$result=mysqli_query($conn,$sql) or die ("Wrong query".mysql_error());
	$row =  mysqli_fetch_array($result);?>
<form action="index.php?page=edit_act" method="post" enctype="multipart/form-data" class="form">
	<?php
		echo "<table>";
		echo "<tr>";
		echo "<td>Registration ID:</td>";
		echo "<td><input type='text' name='id' value=".$row['id']."></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Name:</td>";
		echo "<td><input type='text' name='name' value=".$row['name']."></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Address:</td>";
		echo "<td><input type='text' name='address' value=".$row['address']."></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Department:</td>";
		echo "<td>";
		echo "<select name='department' value=".$row['department'].">";
		echo "<option>Information Technology</option>";
		echo "<option>Electrical Engineering</option>";
		echo "<option>Civil Engineering</option>";
		echo "<option>Hotel Management</option>";
		echo "</select>";
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Enrollment Date:</td>";
		echo "<td><input type='date' name='enrollment' value=".$row['enrollment']."></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Guardian:</td>";
		echo "<td><input type='text' name='guardian' value=".$row['guardian']."></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Contact:</td>";
		echo "<td><input type='text' name='contact' value=".$row['contact']."></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><input type='submit' id='searchSubmit' value=Update Student' name='update'></td>";
		echo "</tr>";
		echo "</form>";
}