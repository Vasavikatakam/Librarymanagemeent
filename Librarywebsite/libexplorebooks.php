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
	<body background="http://www.template-joomspirit.com/template-joomla/template-107/images/background/spotlight-03-NR.jpg"></body>

	
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

echo "<center><h1><i><b><u>All Book Details</u></b><i></h1></center>";

$sql="select *from bookdetails";
$result=mysqli_query($conn,"$sql");

if($result->num_rows > 0 ) 	{
	echo "<table><tr><th>BOOK_ID</th><th>BOOK NAME</th><th>AUTHOR</th><th>CATEGORY</th><th>PUBLISHER</th><th>LANGUAGE</th><th>EDITION</th><th>PRICE</th><th>PAGES</th><th>ACTUAL COPIES</th><th>CURRENT COPIES</th><th>RACK</th><th>DATE ADDED</th><th>DESCRIPTION</th><th>IMPORT</th><th>AVAILABLE</th></tr>";

	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["book_id"] . "</td><td>".$row["book_name"]. "</td><td>".$row["author"] . "</td><td>".$row["category"] ."</td><td>". $row["publisher"] . "</td><td>".$row["language"]. "</td><td>".$row["edition"]. "</td><td>".$row["price"] . "</td><td>".$row["pages"] . "</td><td>".$row["actual_copies"] . "</td><td>".$row["current_copies"] ."</td><td>".$row["rack"]. "</td><td>".$row["dateadded"]."</td><td>".$row["description"]."</td><td>".$row["import"]."</td><td>".$row["available"]."</td></tr>";
}

echo "</table>";
}

	else {
		echo "no results";
}







