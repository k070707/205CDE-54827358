<?php 
	$mysqli  = new mysqli("localhost", "root", "", "koraya");
	
    session_start(); 
	
    if (isset($_POST['hkid'])) {
	$hkid = $_POST['hkid'];}
	
	if (isset($_POST['password'])) {
    $password=$_POST['password'];}
	
	if (isset($_POST['name'])) {
	$name = $_POST['name'];}
	
	if (isset($_POST['phone'])) {
    $phone=$_POST['phone'];}
	
    if (isset($_POST['address'])) {
    $address=$_POST['address'];}

	
	$sql = "INSERT INTO login (password, hkid, priority) VALUES (?, ?, 2)";
    if($stmt = $mysqli->prepare($sql)){
    $stmt->bind_param('ii',$password,$hkid);
    $stmt->execute();
	}	
	
	$sql = "SELECT id FROM login WHERE hkid=$hkid";
    $result= $mysqli->query($sql);
	$row = @mysqli_fetch_array($result);
	$id = $row[0];
	 
	 
	$sql = "INSERT INTO presonal_info (id, name, telephone, login_id, address) VALUES (?, ?, ?, ?, ?)";
    if($stmt = $mysqli->prepare($sql)){
    $stmt->bind_param('isiis',$id,$name,$phone,$id,$address);
    $stmt->execute();
	}	
	 
$mysqli->close();  
 
echo "<script> alert('Your login ID is $id'); </script>"; 
echo "<meta http-equiv='Refresh' content='0;http://localhost/205project/productpage.html'>"; 

?>      