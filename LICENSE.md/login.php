<?php 
    if (isset($_POST['password'])) {
    $password=$_POST['password'];}
	
    if (isset($_POST['username'])) {
	$username = $_POST['username'];}
	
	$mysqli = new mysqli("localhost", "root", "", "koraya");
	session_start(); 
	
    $sql="SELECT password FROM login WHERE id=$username";
	$result= $mysqli-> query($sql); 
	$row = @mysqli_fetch_array($result);
	$dbpasswd=$row[password];
	
	
    if (is_null($dbpasswd)) {
        echo "<script> alert('Your password is wrong.'); </script>"; 
        echo "<meta http-equiv='Refresh' content='0;http://localhost/205project/login.html'>"; 
    } 
    else { 
      if ($dbpasswd != $password){
        echo "<script> alert('Your password is wrong.'); </script>"; 
        echo "<meta http-equiv='Refresh' content='0;http://localhost/205project/login.html'>"; 
      } 
      else {  
	    $_SESSION["username"]=$username;
        echo "<script> alert('Successful!!'); </script>"; 
        echo "<meta http-equiv='Refresh' content='0;http://localhost/205project/productpage.html'>"; 
			$sql = "UPDATE login SET priority = 2 WHERE id=$username";
    if (mysqli_query($mysqli, $sql)) {
    echo "";
	}
		
      } 
    } 

	
	
    $mysqli->close(); 
?>