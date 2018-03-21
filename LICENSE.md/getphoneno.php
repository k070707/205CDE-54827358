<?php

	$mysqli  = new mysqli("localhost", "root", "", "koraya");
	
    session_start(); 
    $sql = "SELECT id FROM login WHERE priority=2";
    $result= $mysqli->query($sql);
	$row = mysqli_fetch_array($result);
	$id = $row[0];
	
	$sql = "SELECT telephone FROM presonal_info WHERE login_id=$id";
    $result= $mysqli->query($sql);
	$row = mysqli_fetch_array($result);
	$phone = $row[0];
	
	 echo "var jstext="."'$phone'";
$mysqli->close(); 
	
?>

