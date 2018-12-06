<?php
   include('../database.php');
   session_start();

   if(!isset($_SESSION['login_user'])){
      header("location:../login.php");
   }


   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($conn,"select username from users where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];

?>