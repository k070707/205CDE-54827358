<?php 
$mysqli  = new mysqli("localhost", "root", "", "koraya");

    $sql = "SELECT id FROM login WHERE priority=2";
    $result= $mysqli->query($sql);
	$row = mysqli_fetch_array($result);
	$id=$row[0];

	$sql = "DELETE FROM purchas_car WHERE id=$id";
	$result= $mysqli->query($sql);
	
    $sql = "SELECT address FROM presonal_info WHERE login_id=$id";
    $result= $mysqli->query($sql);
	$row = mysqli_fetch_array($result);
	$address=$row[0];
	

	$mysqli->close();
?>

<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1"></head>
<title>KOKAYA online shop</title>
<style>
body{
    background-color: black;
	width:100%;
}

div{
    color:#FFFFFF;
	text-align: center;
	font-size:150%;
}

.button {
    background-color:black;
    border: 2px solid white;
    color:white;
    padding: 20px 40px;
    text-align: center;
    font-size: 20px;
    margin: 4px 2px;
	border-radius: 12px;
}

</style>

<body>
<br><br><br>
<div>Your order will be sent to the following address:</div>
<div>Please pick up and check in time</div>
<br>
<br>
<div><?php echo $address ?></div><br><br>
<div><a href="http://localhost/205project/productpage.html"><input type="button" value="Back" class="button"></input></a></div>
</body>
</html>