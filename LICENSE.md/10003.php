<?php

	$mysqli = new mysqli("localhost", "root", "", "koraya");
	session_start(); 
	
	$sql = "SELECT id FROM login WHERE priority=2";
    $result= $mysqli->query($sql);
	$row = mysqli_fetch_array($result);
	$login=$row[0];
	
	$sql = "SELECT product_name FROM product WHERE product_no=10003";
    $result= $mysqli->query($sql);
	$row = mysqli_fetch_array($result);
	$pname=$row[0];

	$sql = "SELECT price FROM product WHERE product_no=10003";
    $result= $mysqli->query($sql);
	$row = mysqli_fetch_array($result);
	$price=$row[0];
	
	$sql = "INSERT INTO purchas_car (product_no, product_name, price, id) VALUES (10003, ?, ?, ?)";
    if($stmt = $mysqli->prepare($sql)){
    $stmt->bind_param('sii',$pname,$price,$login);
    $stmt->execute();
	}	
echo "<script> alert('Add to purchasing car successful'); </script>"; 
echo "<meta http-equiv='Refresh' content='0;http://localhost/205project/product_polyester.html'>"; 
?>