<?php

require_once 'controller/productInfo.php';
$_POST['search'] = '';
$products = fetchSearchedProduct($_POST['search']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="controller/search.php" method="post">
		<input type="text" name="search">
		<input type="submit" name="submit" value="Search by Name"><br><br>
		<div style="width: 300px; border-top: 2px solid gray"></div><br>
		<table style="border: 2px solid black;">
			<thead>
				<tr>
				<th style="border: 2px solid black;">Name</th>
				<th style="border: 2px solid black;">Profit</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach($products as $i => $product): ?>
					<tr>
						<td style="border: 2px solid black;"><?php echo $product['Name'] ?></td>
						<td style="border: 2px solid black;"><?php echo $product['profit'] ?></td>
						<td style="border: 2px solid black;"><a href="editProduct.php?name=<?php echo $product['Name']?>">Edit</a></td>
						<td style="border: 2px solid black;"><a href="deleteProduct.php?name=<?php echo $product['Name']?>">Delete</a></td>
					</tr>

					<?php endforeach; ?>
			</tbody>
		</table>
	</form>

</body>
</html>