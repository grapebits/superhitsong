<?php
   include('database.php');
   session_start();
  
   
if(isset($_SESSION['login_user'])){
      header("location:admin/dashboard.php");
   }

   
?>