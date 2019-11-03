<?php
   include('dbConnection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db_conn,"select username from adminTable where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:action_ActualLogin.php");
      die();
   }
?>