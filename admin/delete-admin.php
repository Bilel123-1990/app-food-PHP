<?php

//Include constant.php
include('../config/constants.php') ;

//1 get the id to be deleted
$id=$_GET['id'];
$sql="DELETE FROM admin WHERE id=$id";
//create SQL Qeury to delete Admin
 
//Execute the Query
$res = mysqli_query($conn,$sql);

//check wether the query

if ($res==true) {
    //query exuted succefly
    // echo "Admin Deleted";
    $_SESSION['delete']="<div class='success'>Admin delelted suuscefly</did>";
    // redirec to manage Adminpage
    header('location:'.SITEURL.'admin/manage-admin.php');
}
else {
    // echo "Failed to deleleted Admin";

    $SESSION['delete']="<div class='erreur'>Failed to delete Admin Try Again Later.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
    
}

// redirect to manage Admin page with message()







?>