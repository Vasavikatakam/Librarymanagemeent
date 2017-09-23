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

echo "<center><h1><i><b><u>LIBRARY BALANCE DETAILS</u></b><i></h1></center>";

$sql="select *from library_balance_details";
$result=mysqli_query($conn,"$sql");

if($result->num_rows > 0 ) 	{
	echo "<center><table><tr><th>USER ID</th><th>BOOK ID</th><th>AMOUNT</th></tr></center>";

	while($row=$result->fetch_assoc())
	{
		echo "<center><tr><td>".$row["user_id"] . "</td><td>".$row["book_id"]. "</td><td>".$row["amount"] . "</td></tr></center>";
}

echo "</table>";
}

	else {
		echo "no results";
}







