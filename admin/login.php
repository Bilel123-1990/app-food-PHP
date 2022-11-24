<?php include('../config/constants.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/admin.css">
    <title>login</title>

</head>

<body>




    <div class="login">
        <h1 class="text-center">Login</h1>
        <br><br>
        <?php 
              if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
              }

              if (isset($_SESSION['no-login-message'])) {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
              }
        
        ?><br><br>




        <form action="" method="POST" class="text-center">
            UserName:<br>
            <input type="text" name="username" placeholder="enter username"><br><br>

            Password:<br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>

        </form>



        <p class="text-center">Created By -
            <a href="wwww.google.com">Google</a>
        </p>
    </div>

</body>

</html>
<?php
    
    //check whether the submit button is clickedor not 
if (isset($_POST['submit'])) {
    //process for login
    //get the data from login
     $username = $_POST['username'];
     $password = md5($_POST['password']);


     //Sql to chekc wether the user 
     $sql="SELECT*
      FROM admin
      WHERE username='$username'
      AND password='$password'
      ";


//Execute The qurey

$res=mysqli_query($conn,$sql);
   
    //Count rows To check wether the user exist
    $count =mysqli_num_rows($res);
    if ($count==1) {
        //user Available and login Success
        $_SESSION['login']="<div class='success'>Login Succesufly </div>";
        $_SESSION['user']=$username;
        
        header('location'.SITEURL.'admin/index.php');
    }
    else 
    {
        $_SESSION['login']="<div class='error text-center'>Did not matched </div>";
        //redicrect home page
        header('location'.SITEURL.'admin/login.php');
    } 
}

?>