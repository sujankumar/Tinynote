<?php
session_start();
unset($_SESSION["user_id"]);//session unset user_id
unset($_SESSION["username"]);// session unset username
header("Location:signin.html");//redirecting page location
?>