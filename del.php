<?php
include'connection.php';//including a file for mysql connection
global $conn;
$sql = "DELETE FROM createnote WHERE noteid = {$_GET['id']}";
$retval = mysql_query( $sql, $conn );//mysql connection for query
if(! $retval )
{
die('Could not delete data: ' . mysql_error());
}else
{
header("Location://localhost/tinynote/home.php");//redirecting to home page
}
mysql_close($conn);//mysql connection close
?>
