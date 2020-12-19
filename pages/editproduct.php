<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="select * from `product` where `product_id`='$id'";
    $result=mysqli_query($conn, $sql) or die("Wrong query".mysql_error());
    $row =  mysqli_fetch_array($result); ?>
<form action="index.php?page=editproduct_act" method="post" enctype="multipart/form-data" class="form">
	<?php
        echo "<table>";
    echo "<td><input type='hidden' name='product_id' value=".$row['product_id']."></td>";
    echo "<tr>";
    echo "<td>Product Name:</td>";
    echo "<td><input type='text' name='name' value=".$row['product_name']."></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Quantity:</td>";
    echo "<td><input type='text' name='quantity' value=".$row['product_quantity']."></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Product Rate:</td>";
    echo "<td><input type='text' name='cost' value=".$row['product_cost']."></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Sales Rate:</td>";
    echo "<td><input type='text' name='sales_rate' value=".$row['sales_rate']."></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><input type='submit' id='searchSubmit' value='Update Product' name='update'></td>";
    echo "</tr>";
    echo "</form>";
}
?>