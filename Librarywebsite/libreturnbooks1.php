<?php
session_start();
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'vasavi';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $val1=  $_SESSION['return1'];
   $val2= $_SESSION['return2'];
 
   
   
  $sql="insert into returndetails values('$val1','$val2',NOW())";
   //$sql="select count(*) as count from issuedbooks where (issuedbooks.user_id='$val1') and (issuedbooks.book_id='$val2')";
   mysql_select_db('library');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval) {
      die('Could not get data: ' . mysql_error());
   }
   
 else
 {
	header('Location: libpermanentuserdata1.php');  
 }
   
   echo "Inserted successfully\n";
   
   mysql_close($conn);
?>