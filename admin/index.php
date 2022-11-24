<?php include('partials/menu.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order Website</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

    <!--Menu-->


    </div>
    <!--Menu-->
    <div class="main-content">
        <div class="wrapper">
            <h1>Dashbord</h1>
            <br>

            <?php 
              if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
              }
        
        ?><br><br>



            <div class="col-4 text-center">
                <h1>5</h1>
                Categories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                Categories
            </div>


            <div class="col-4 text-center">
                <h1>5</h1>
                Categories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                Categories
            </div>

            <div class="clearfix">

            </div>




        </div>
    </div>
    <?php include('partials/footer.php') ?>
    <!--Menu-->