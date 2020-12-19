<?php
if (isset($_POST['add'])) {
    $name=$_POST['name'];
    $rate=$_POST['rate'];
    $quantity=$_POST['quantity'];
    $customer_name=$_POST['customer_name'] ?? null;
    $customer_address=$_POST['customer_address'] ?? null;
    $customer_contact=$_POST['customer_contact'] ?? null;
    $paid_amount=$_POST['paid_amount'];
    $charge=$_POST['charge'] ?? 0;
    $amount=($rate*$quantity)+$charge;
    $remaining_amount=$amount-$paid_amount;
    $selectsql=mysqli_query($conn, "select product_id, product_quantity from `product` where product_name like '$name'");
    $row =  mysqli_fetch_object($selectsql);
    $prdqty = $row->product_quantity;

    
    if (!empty($name) && !empty($rate) && !empty($quantity) && $prdqty>=$quantity) {
        $insertsql="insert into `sales` (product_id, product_name, product_rate, sales_quantity, sales_amount, service_charge, customer_name, customer_address, customer_contact, paid_amount, remaining_amount) values ('$row->product_id','$name','$rate','$quantity','$amount', '$charge', '$customer_name','$customer_address','$customer_contact','$paid_amount','$remaining_amount')";
        $result=mysqli_query($conn, $insertsql) or die("Wrong query ". mysql_error());
        $update=mysqli_query($conn, "update `product` set product_quantity=product_quantity-$quantity where product_id=$row->product_id");
        echo "Successfull!";
    } else {
        echo "Some fields missing or remaining stock exceeds the entered quantity!";
    }
}
