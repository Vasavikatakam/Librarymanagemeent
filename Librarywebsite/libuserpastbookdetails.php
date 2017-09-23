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
	<body background="http://www.template-joomspirit.com/template-joomla/template-107/images/background/spotlight-02-NR.jpg"></body>

	
<?php
session_start();
$val1= $_SESSION['varname'];
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

echo "<center><h1><i><b>USER PAST BOOK DETAILS</b><i></h1></center>";

$sql="select *from permanent_user_data where user_id='$val1'";
$result=mysqli_query($conn,"$sql");

if($result->num_rows > 0 ) 	{
	echo "<center><table><tr><th>USER ID</th><th>BOOK ID</th><th>ISSUED DATE</th><th>ACTUAL RETURN DATE</th><th>RETURNED DATE</th></tr></center>";

	while($row=$result->fetch_assoc())
	{
		echo "<center><tr><td>".$row["user_id"] . "</td><td>".$row["book_id"]. "</td><td>".$row["issuedate"] . "</td><td>".$row["actual_return_date"] ."</td><td>".$row["returned_date"] ."</td></tr></center>";
}

echo "</table>";
}

	else {
		echo "no results";
}






