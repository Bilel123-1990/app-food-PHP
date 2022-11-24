<?php include('partials/menu.php');?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br><br>
        <td>Your Password</td>
        <form action="" method="POST">

            <table class="tbl-30">

                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full-name" placeholder="Entrer your name">
                    </td>
                </tr>

                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username" placeholder="Entrer your Username">
                    </td>
                </tr>


                <tr>
                    <td>Your Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Entrer your Password ddddddd">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>


    </div>

</div>


<?php include('partials/footer.php') ?>



<?php 

if (isset($_POST['submit'])) 
{
 $full_name = $_POST['full-name'];
 $username = $_POST['username'];
 $password = md5($_POST['password']);// password cryted with MD5


 //sql query to save tha data into database
 $sql = "INSERT  INTO admin SET 
 full_name='$full_name',
 username='$username',
 password='$password'
 ";


$res = mysqli_query($conn,$sql) or die(mysqli_error($conn));


//check whether the (Query is Executed)
if($res==TRUE)
{
   // echo "data Inserted";
   //cretae sesion variable to display Message
   $_SESSION['add']= "Admin added successfully";
   //redicrect Page to Manage Admin
   header("location: ".SITEURL.'admin/manage-admin.php');
    
    
}
else
{
    //echo "Faile to insert Data";
    $_SESSION['add']= "Failed To Add Admin";
   //redicrect Page to Add Admin
   header("location:".SITEURL.'admin/add-admin.php');
}



  
}
?>