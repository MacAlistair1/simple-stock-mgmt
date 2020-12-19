<?php
$sql  =  "select * from `product`" ;
$result =  mysqli_query($conn, $sql) or die("Wrong Query".mysqli_error());
        $num  =  mysqli_num_rows($result);
        if ($num>0) {?>
        
			<div style="display: block;" id="print">
				
			<ul style="margin:20px">
				<?php
                $count_search=0;?>
				<table class="table">
                <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product quantity</th>
                <th>Product Rate</th>
                <th>Sales Rate</th>
                <th>Stock</th>
                </tr>
					<?php
                while ($row =  mysqli_fetch_object($result)) {
                    ?>
						<tr>
						<td><?php echo $row->product_id; ?></td>
						<td><?php echo $row->product_name; ?></td>
                       	<td><?php echo $row->product_quantity; ?></td>
                       	<td><?php echo $row->product_cost; ?></td>
                       	<td><?php echo $row->sales_rate; ?></td>
						<td><?php if ($row->product_quantity>0) {
                        echo "<h6>Available</h6>";
                    } else {
                        echo "<h5>Not available</h5>";
                    } ?></td>
						<td><?php echo "<a href='index.php?page=editproduct&id=$row->product_id'>Edit</a>| <a href='index.php?page=deleteproduct&id=$row->product_id'>Delete </a>"; ?></td>
                    </tr>        		 
      					      
             	 <?php $count_search++;
                }?>
       			</table><?php
                echo $count_search." records found!"?></ul></div><?php
            
        } else {?>
           
			<h5 style="margin-left:20px;"><?php echo "Search result for "."'".$searchtext."'";?></h5>
        
            <div style="display: block;">
			<ul style="margin:20px"><?php
                echo "<li>";
                echo "No record found!";
                echo "</li>";
                ?>
			</ul>
          	</div><!-- /tab1 -->
          <?php
    }

?>