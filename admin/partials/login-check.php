<?php 

  if (!isset($_SESSION['user'])) 
  {
    //user in not logged in
    // redirect

    $_SESSION['no-login-message']="<div class='error text-center'>Login to access admin</div>";
    
    //redicrect login Page
    header('location:'.SITEURL.'admin/login.php');
  }



?>