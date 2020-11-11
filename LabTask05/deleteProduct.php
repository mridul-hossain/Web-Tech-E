<?php

require_once 'controller/productInfo.php';
$product = fetchProduct($_GET['name']);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="controller/delete.php" method="post">
		<fieldset style="width: 30%">
		<legend>DELETE PRODUCT</legend>
		<label>Name: <?php echo $product['Name'] ?></label><br>
		<label>Buying Price: <?php echo $product['Buying_Price'] ?></label><br>
		<label>Selling Price: <?php echo $product['Selling_Price'] ?></label><br>
		<label>Displayable: <?php echo $product['Displayable'] ?></label><br><br>
		<div style="width: 200px; border-top: 2px solid gray;"></div><br>
		<input type="hidden" name="name" value="<?php echo $_GET['name'] ?>">
		<input type="submit" name="deleteProduct" value="Delete">
	</fieldset>
	</form>

</body>
</html>