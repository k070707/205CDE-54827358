<?php 
	$mysqli  = new mysqli("localhost", "root", "", "koraya");
	
    session_start(); 

    $sql = "UPDATE login SET priority = 1";
    if (mysqli_query($mysqli, $sql)) {
    echo "";
}

$mysqli->close();  
 
echo "<script> alert('You logout now!'); </script>"; 
echo "<meta http-equiv='Refresh' content='0;http://localhost/205project/index.html'>"; 

?>      


