<?php 

//include constant.php for qiturl
include('../config/constants.php');


// 1.destory the session
session_destroy();
//2.Redirect to login Page
header('location:'.SITEURL.'admin/login.php');

?>