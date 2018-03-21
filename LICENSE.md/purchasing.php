<?php

$mysqli  = new mysqli("localhost", "root", "", "koraya");

    session_start(); 
	
	$totalprice = 0;
	
    $sql = "SELECT id FROM login WHERE priority=2";
    $result= $mysqli->query($sql);
	$row = mysqli_fetch_array($result);
	$id=$row[0];
	
    $result= $mysqli->query("SELECT product_no,product_name,price FROM purchas_car WHERE id=$id");
    
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
	font-size:300%;
}

table {
    margin:auto;
    background-color: HSL(207,14%,35%);
	border-collapse: collapse;
}

th, td {
    border: 3px solid HSL(207,14%,20%);
	border-collapse: collapse;
    padding: 40px;
	color:#FFFFFF;
	text-align: right;
	font-size:120%;
}

.button {
    background-color:black;
    border: 2px solid white;
    color:white;
    padding: 20px 40px;
    text-align: center;
    font-size: 14px;
    margin: 4px 2px;
	border-radius: 12px;
}

</style>


<body>
<table border='1px'>
<br><br><div>KORAYA Purchasing car</div><br><br>
<td><center>Product No</td><td><center>Product Name</td><td><center>Price</td>
</tr>
<?php
while($row=@mysqli_fetch_row($result)){
?>
<tr>
<td><center><?php echo $row[0];?></td><td><center><?php echo $row[1];?></td><td><center><?php echo $row[2]; $totalprice= $totalprice + $row[2];?></td>
</tr>
<?php
}
?>
<tr>
<td>Total price is : <?php echo $totalprice ?></td>
<td><a href="http://localhost/205project/bill.php"><input type="button" value="CONFIRM" class="button"></input></a></td> 
</tr>
<?php
$mysqli->close(); 
?>
</table>
</body>
</html>