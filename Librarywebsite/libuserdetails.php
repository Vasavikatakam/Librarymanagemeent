<html>
	<head>
		<style>
			table, th, td	{
				border: 1px solid black;
				border-collapse: collapse;
		}
th, td	{
		padding : 5px;
		text-align : center;
}

		</style>
	</head>
	<body background="https://pcbx.us/bfjb.jpg"></body>

	
<?php
$servername = "localhost";
$username = "root ";
$password = "vasavi";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, 'root', 'vasavi', 'library');

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

echo "<center><h1><i><b>USER DETAILS</b><i></h1></center>";

$sql="select *from userdetails";
$result=mysqli_query($conn,"$sql");

if($result->num_rows > 0 ) 	{
	echo "<center><table><tr><th>USER ID</th><th>USER NAME</th><th>TYPE</th><th>GENDER</th><th>ADDRESS</th><th>CONTACT NO</th></tr></center>";

	while($row=$result->fetch_assoc())
	{
		echo "<center><tr><td>".$row["user_id"] . "</td><td>".$row["user_name"]. "</td><td>".$row["type"] . "</td><td>".$row["gender"] ."</td><td>".$row["address"] ."</td><td>".$row["contact_no"] ."</td></tr></center>";
}

echo "</table>";
}

	else {
		echo "no results";
}





