<?php

	$mysqli  = new mysqli("localhost", "root", "", "koraya");
	
    session_start(); 
    $sql = "SELECT id FROM login WHERE priority=2";
    $result= $mysqli->query($sql);
	$row = mysqli_fetch_array($result);
	$id = $row[0];
	
	echo "var jstext="."'$id'";
	
$mysqli->close();  
	 
?>

