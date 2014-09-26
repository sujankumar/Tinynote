<?php
include'connection.php';//including a file for mysql connection
global $conn;
If(isset($_REQUEST['submit'])!='')
{
  If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''){
    Echo "please fill the empty field.";
  }
  else{
    $sql="insert into users(username,email,password) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."')";
    $res=mysql_query($sql,$conn);//mysql connection for query
    header("Location://localhost/tinynote/signin.html");//next page location
    }
}
?> 