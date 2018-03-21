<?php
	$mysqli  = new mysqli("localhost", "root", "", "koraya");
	
	if (isset($_POST['address'])) {
	$myaddress = $_POST['address'];}
	
    session_start(); 
	
    $sql = "SELECT id FROM login WHERE priority=2";
    $result= $mysqli->query($sql);
    $row = mysqli_fetch_array($result);
	
    $sql = "UPDATE presonal_info SET name='$myaddress' WHERE login_id=$row[0]";
    if (mysqli_query($mysqli, $sql)) {
    echo "";
}

$mysqli->close();  
 
echo "<script> alert('Updated!'); </script>"; 
//echo "<meta http-equiv='Refresh' content='0;http://localhost/205project/accountpage.html'>"; 
    
?>