<?php
   session_start();
$username=$_SESSION['login_user'];
include "lastvisit.php";
   if(session_destroy()) {
      header("Location: login.php");
   }
?>