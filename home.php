
<?php
session_start();
?><!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <title>Home</title>
      <link href="/tinynote/bootstrap/css/bootstrap.css" rel="stylesheet">
      <!--<link href="/tinynote/font-awesome.4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
      <link href="/tinynote/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
 <style type="text/css">
body {
   padding-top: 30px;
   padding-bottom: 0px;
   background-color:#363F45;
   }
   
   h1 {
   text-align   : center;
   font-size    : 60px;
   font-family  :Open Sans;
   font-weight  : bold;
   text-shadow  : 4px 3px 0 #575D6B,8px 9px 0 rgba(0,0,0,0.15);
   margin-top   : 40px;
   margin-bottom: 20px;
   color        :#fff;
   }
   th
   {
   background:#A8AA99;
   font-family:Open Sans;
   font-size: 20px;
   color:#fff;
   }
   .report-block .report-body 
   {
   border: 1px solid #ddd;
   border-top: 0px;
   background: #fff;
   border-bottom-left-radius: 4px;
   border-bottom-right-radius: 4px;
   }
   
   .navtop
   {
   background-color:#A8AA99;border-color:#080808;
   }
   .top-login {
   font-size: 20px;
   font-family:Open Sans;
   position: absolute;
   right: 0;
   background:#202F38;
   padding: 10px 20px;
   z-index: 999;
   opacity: 0.75;
   border-bottom-left-radius: 4px;
   }
   .btnpos
   {
   margin-top: 7px;
   }
</style>

 <body>
 <?php
include'connection.php';//including a file for mysql connection
global $conn;
$user_id = $_SESSION["user_id"];
$sql = "SELECT * FROM createnote WHERE user_id='$user_id'";
$retval = mysql_query( $sql, $conn );//mysql connection for query
if(! $retval )
{
die('Could not get data: ' . mysql_error());
}

?>
  <div class="container"><!--container starts-->
     <div class="top-login" >
       <a href="/tinynote/logout.php" style="text-decoration:none">Signout</a>
    </div>
  </div><!--container ends-->
  <div class="container"><!--container starts-->
      <h1 class="center">TINY NOTE</h1>
      <div class="report-block">
        <div class="report-body">                 
          <table class="table"><!--table starts-->
            <thead>
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th><a href="/tinynote/create.html" class="btn btn-lg btn-success pull-right">
                  <span class="glyphicon glyphicon-list-alt"></span> Create note</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php while($row = mysql_fetch_array($retval)){?>
                <tr style="overflow:auto">
                   <td> <?php echo "{$row['1']}" ?></td>
                    <td ><?php echo "{$row['2']}" ?></td>
                    <td><a href="/tinynote/del.php?id=<?echo $row['noteid'];?>" class="btn btn-default btn-danger pull-right">
                                <span class="glyphicon glyphicon-trash"></span> Delete</a>
                                  <?php
                                    }
                                  mysql_close($conn);//mysql connection close
                                    ?>
                        </td>
                      </tr> 
            </tbody>
          </table><!-- table end-->
        </div>
      </div>
    </div><!-- containter ends -->
  </body>
</html>