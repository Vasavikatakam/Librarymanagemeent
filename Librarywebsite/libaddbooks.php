<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'vasavi';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $val1= $_POST['bookname'];
   $val2=$_POST['author'];
   $val3=$_POST['category'];
   $val4=$_POST['publisher'];
   $val5=$_POST['language'];
   $val6=$_POST['edition'];
   $val7=$_POST['price'];
   $val8=$_POST['pages'];
   $val9=$_POST['actualcopies'];
   $val10=$_POST['currentcopies'];
   $val11=$_POST['rack'];
   $val12=$_POST['dateadded'];
   $val13=$_POST['description'];
   $val14=$_POST['import'];
   $val15=$_POST['available'];
   
   
  $sql="insert into bookdetails values(book_id, '$val1', '$val2', '$val3', '$val4', '$val5', '$val6', '$val7', '$val8', '$val9', '$val10', '$val11', '$val12', '$val13', '$val14', '$val15')";
   mysql_select_db('library');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval) {
      die('Could not get data: ' . mysql_error());
   }
 else
 {
	 header('Location: libexplorebooks.php');  
 }
   echo "Inserted successfully\n";
   
   mysql_close($conn);
?>