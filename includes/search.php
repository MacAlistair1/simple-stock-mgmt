
	  <?php if ($contentPage == "stock") { ?>
       <form action="index.php?page=stock-home" method="post" style="width:100%; text-align:center; margin-top:10px;">
   <input type="hidden" name="searchtype" value="product">
  	<input id="searchText" type="text" placeholder="Product Name..." style="margin-top: 13px; margin-bottom: 19px; padding-left: 10px; padding-right: 14px;" maxlength="256" value="" name="searchtext">
  	<input type="submit" value="Search" id="searchSubmit" name="search">
	  </form>
	  <?php } else { ?>

		<form action="index.php?page=home" method="post" style="width:100%; text-align:center;">   
  	<input type="hidden" name="searchtype" value="">
  	<input id="searchText" type="text" autofocus="autofocus" placeholder="Type date..." style="margin-top: 13px; margin-bottom: 19px; padding-left: 10px; padding-right: 14px;" maxlength="256" value="" name="searchtext">
  	<input type="submit" value="Search" id="searchSubmit" name="search">
	  </form>
 
		<form action="index.php?page=home" method="post" style="width:100%; text-align:center;">
   <input type="hidden" name="searchtype" value="customer">
  	<input id="searchText" type="text" placeholder="Customer Name..." style="margin-top: 13px; margin-bottom: 19px; padding-left: 10px; padding-right: 14px;" maxlength="256" value="" name="searchtext">
  	<input type="submit" value="Search" id="searchSubmit" name="search">
	  </form>

	  <?php } ?>
      
 <div>    
