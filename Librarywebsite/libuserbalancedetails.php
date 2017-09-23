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

echo "<center><h1><i><b>MONEY DEDUCTION DETAILS</b><i></h1></center><br><br>";

$sql="select *from accountdetails where user_id='$val1'";
$result=mysqli_query($conn,"$sql");

if($result->num_rows > 0 ) 	{
	echo "<center><table><tr><th>User ID</th><th>Account No</th><th>Remaining balance</th></tr></center>";

	while($row=$result->fetch_assoc())
	{
		echo "<center><tr><td>".$row["user_id"] . "</td><td>".$row["acc_no"]. "</td><td>".$row["balance"] . "</td></tr></center>";
	}

echo "</table>";
}

	else {
		echo "Nothing is deducted from your account till now";
}







