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

	<form action="controller/edit.php" method="post">
		<fieldset style="width: 30%">
		<legend>EDIT PRODUCT</legend>
		<label>Name</label><br>
		<input type="text" name="name" value="<?php echo $product['Name']?>"><br>
		<label>Buying Price</label><br>
		<input type="text" name="bprice" value="<?php echo $product['Buying_Price']?>"><br>
		<label>Selling Price</label><br>
		<input type="text" name="sprice" value="<?php echo $product['Selling_Price']?>"><br><br>
		<div style="width: 200px; border-top: 2px solid gray;"></div><br>
		<input type="checkbox" name="display" id="display" value="<?php echo $product['Displayable']?>" checked>
		<label for="display">Display</label><br><br>
		<div style="width: 200px; border-top: 2px solid gray;"></div><br>
		<input type="submit" name="editProduct" value="Save">
	</fieldset>
	</form>

</body>
</html>