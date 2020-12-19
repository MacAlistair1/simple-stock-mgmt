<?php
if (isset($_POST['add'])) {
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $rate=$_POST['cost'];
    $salesRate=$_POST['sales_rate'];
    if (!empty($name) && !empty($quantity)) {
        $insertsql="insert into `product` (product_name, product_quantity, product_cost, sales_rate) values ('$name','$quantity','$rate', '$salesRate')";
        $result=mysqli_query($conn, $insertsql) or die("Wrong query".mysqli_error());
        echo "Successfull!";
    } else {
        echo "Some fields missing.";
    }
}
