<?php
$totalPurchase = 0;
$totalSales = 0;
$totalRemainingPrice = 0;
$pf = 0;
$salesProductIds = [];
$totalSalesOriginalCost = 0;

$sql  =  "select * from `product`" ;
$sql1  =  "select * from `sales`" ;
$result =  mysqli_query($conn, $sql) or die("Wrong Query".mysqli_error());
$result1 =  mysqli_query($conn, $sql1) or die("Wrong Query".mysqli_error());
        $num  =  mysqli_num_rows($result);
        $num1  =  mysqli_num_rows($result1);


        if ($num1>0) {
            while ($row1 =  mysqli_fetch_object($result1)) {
                $totalSales += $row1->sales_amount;
                $salesProductIds[] = ['id' => $row1->product_id, 'quantity' => $row1->sales_quantity];
                $totalRemainingPrice += $row1->remaining_amount;
            }
        }


        if ($num>0) {
            $counter = 0;
            while ($row =  mysqli_fetch_object($result)) {
                $totalPurchase += ($row->product_cost * $row->product_quantity);
                if ($salesProductIds[$counter]['id'] == $row->product_id) {
                    $totalSalesOriginalCost += $row->product_cost * $salesProductIds[$counter]['quantity'];
                }
                $counter++;
            }
        }

        $pf = $totalSales - $totalSalesOriginalCost;
?>


<div style="display: block;" id="print">
				
			<ul style="margin:20px">
				<table class="table">
                <tr>
                <th>Remaining Stock Cost</th>
                <th>Receivable Sales Cost</th>
                <th>Total Sales Original Cost</th>
                <th>Total Sales</th>
                <th>Profit/Loss</th>
                <th>Status</th>
                </tr>
                <tr>
                    <td>Rs. <?php echo $totalPurchase ?></td>
                    <td>Rs. <?php echo $totalRemainingPrice ?></td>
                    <td>Rs. <?php echo $totalSalesOriginalCost ?></td>
                    <td>Rs. <?php echo $totalSales ?></td>
                    <td>Rs. <?php echo $pf ?></td>
                    <td> <?php $pf < 0 ? print "<h5>LOSS</h5>" :  print "<h6>PROFIT</h6>"  ?></td>
                </tr>
                </table>
            </ul>
</div>
                    