 <?php
 session_start();//session start
  include'connection.php';//including a file for mysql connection
  global $conn;
  $title = $_POST['title'];// get  title from the POST request
  $description = $_POST['description'];// get  description from the POST request
  // To protect MySQL injection 
  $title = stripslashes($title);
  $title = mysql_real_escape_string($title);
  $description = stripslashes($description);
  $description = mysql_real_escape_string($description);
  $user_id = $_SESSION["user_id"];
  $sql = "INSERT INTO createnote "."(title,description,user_id) "."VALUES "."('$title','$description','$user_id')";
  $retval = mysql_query( $sql, $conn ); //mysql connection for query
  if(! $retval )
  {
  die('Could not enter data: ' . mysql_error());
  }
  else
  {
    header("location:home.php");//redirecting to home page
    mysql_close($conn);//mysql connection close
  }
  ?>