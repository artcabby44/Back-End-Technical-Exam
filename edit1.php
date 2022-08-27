<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$product_id = $_POST['id'];
			$product_name = $_POST['product_name'];
		    $product_quantity = $_POST['product_quantity'];

	   include('connection.php');
		
	 			$query = 'UPDATE products set product_name ="'.$product_name.'",
				 product_quantity ="'.$product_quantity.'" WHERE
					product_id ="'.$product_id.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>