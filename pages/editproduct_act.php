<?php
if (isset($_POST['update'])) {
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $product_id=$_POST['product_id'];
    $rate=$_POST['cost'];
    $salesRate=$_POST['sales_rate'];
    if (!empty($name) && !empty($quantity)) {
        $updatesql="update `product` set product_quantity=$quantity, product_cost=$rate, sales_rate=$salesRate where product_id=$product_id";
        $result=mysqli_query($conn, $updatesql) or die("Wrong query".mysqli_error());
        echo "Successfull!";
    } else {
        echo "Some fields missing.";
    }
}
