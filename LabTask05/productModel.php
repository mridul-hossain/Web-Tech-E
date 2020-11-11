<?php
require_once 'dbConnect.php';

function addProduct($data)
{
	$conn= db_conn();
	$query = "INSERT INTO products(Name,Selling_price,Buying_Price,Displayable) VALUES(:name,:sprice,:bprice,:d)";
	try{
		$stmt = $conn->prepare($query);
		$stmt->execute([
			':name' => $data['name'],
			':sprice' => $data['sprice'],
			':bprice' => $data['bprice'],
			':d' => $data['d']
		]);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

	$conn = null;
	return true;

}

function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT Name, Selling_price - Buying_Price AS profit FROM products WHERE Displayable = "Yes"';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($data){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM products where Name = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function editProduct($data){
    $conn = db_conn();
    $selectQuery = "UPDATE products set Name = ?, Selling_Price = ?, Buying_Price = ?, Displayable = ? where Name = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['Name'], $data['Selling_Price'], $data['Buying_Price'],$data['Displayable'], $data['Name']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($data){
	$conn = db_conn();
	$selectQuery = "DELETE FROM `products` WHERE `Name` = ?";;
	try{
		$stmt = $conn->prepare($selectQuery);
		$stmt->execute([$data]);
	}catch(PDOException $e){
		echo $e->getMessage();
	}

	$conn = null;
	return true;
}

function searchProduct($data){
	$conn = db_conn();
	if(empty($data))
	{
		$selectQuery = "SELECT Name, Selling_price - Buying_Price AS profit FROM products where Name = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
	}
	else{
		$selectQuery = "SELECT Name, Selling_price - Buying_Price AS profit FROM products WHERE Displayable = 'Yes' AND CONCAT(Name,Selling_price,Buying_Price,Displayable) LIKE '%".$data."%'";
	try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
	}

}

