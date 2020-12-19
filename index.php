<?php
 include_once("includes/database_connect.php");
 $profile =  isset($_GET['profile'])?$_GET['profile']:"first";
$contentPage =  isset($_GET['page'])?$_GET['page']:"home";
$category =  isset($_GET['category'])?$_GET['category']:"category";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>KMCC</title>
    <!--javascript-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}

</script>
		<!-- Stylesheets -->
     
        <link rel="stylesheet" type="text/css" href="css/form.css"/>
	<link href="css/master.css" type="text/css" rel="stylesheet">
	</head>
<div id="fb-root"></div>
<script type="text/javascript" src="js/script.js"></script>
<body class="home">
<div class="top group">
	<div class="inner">
		<div class="header group">
        
		<?php
        
        include_once("includes/header.php");?>
		</div><!-- /header group-->
	</div><!-- /inner -->	
</div><!-- /top group -->
<div>
<?php include_once("pages/$profile.php");?>
</div>
<div class="foot">   
	<?php include_once("includes/footer.php");?>
</div>						
</body>
</html>