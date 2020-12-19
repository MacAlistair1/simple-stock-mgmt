<?php
$currentProductSalesRate = 0;
$sql="select * from `product`";
$result =  mysqli_query($conn, $sql) or die("Wrong Query".mysql_error());
$num  =  mysqli_num_rows($result);
?>
<form action="index.php?page=sales_act" method="post" enctype="multipart/form-data" class="form">
	<table>
    
		<tr>
			<td>Product:</td><td>
			<select name="name">
			<option selected disabled>Choose Product</option>
			<?php if ($num>0) {
    while ($row =  mysqli_fetch_object($result)) {
        echo "<option title='Sales Rate: $row->sales_rate'>";
        echo $row->product_name;
        echo "</option>";
    }
}?>
                </select></td>
		</tr>
        
        <tr>
			<td>Sales rate:</td><td><input type="text" placeholder="rate of sales" name="rate" value="" id="salesRate"></td>
		</tr>
		<tr>
			<td>Service Charge:</td><td><input type="text" placeholder="Service Charge" name="charge"></td>
		</tr>
		<tr>
        	<td>Sales Quantity:</td><td><input type="text" placeholder="sales Quantity" name="quantity"></td>
		</tr>
        <tr>
        	<td>Paid Amount:</td><td><input type="text" placeholder="Amount to pay" name="paid_amount"></td>
		</tr>
        <tr>
        	<td>Customer Name:</td><td><input type="text" placeholder="Customer name" name="customer_name"></td>
		</tr>
        <tr>
        	<td>Customer Address:</td><td><input type="text" placeholder="Customer address" name="customer_address"></td>
		</tr>
        <tr>
        	<td>Customer Contact:</td><td><input type="text" placeholder="Customer contact number" name="customer_contact"></td>
		</tr>
		<tr>
        	<td><input type="submit" id="searchSubmit" name="add"></td>
		</tr>
    </table>
</form>