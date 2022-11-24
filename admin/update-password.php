<?php
include ('partials/menu.php');?>


<div class="main-containt">

    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br><br>

        <?php
  if (isset($_GET['id'])) 
  {
    $id=$_GET['id'] ;
  }

?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>
                        Old Password
                    </td>
                    <td>
                        <input type="password" name="old_password" placeholder="old_password">
                    </td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td>
                        <input type="password" name="new_password" placeholder="New Password">
                    </td>
                </tr>

                <tr>
                    <td>
                        Confirme Password
                    </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="confirm Password">
                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="ChangePaswword" class="btn-secondary">
                    </td>
                </tr>
            </table>




        </form>
    </div>


</div>

<?php 

//check submit button
if (isset($_POST['submit'])) 
{
    //get the data from form
    $id=$_POST['id']   ;
    $current_password=md5($_POST['current_password']);
    $newpassword=md5($_POST['new_password']);
    $condirm_password= md5($_POST['confirm_password']);

    //rqt
    $sql="SELECT * From admin where id=$id
    and password='$current_password'
     ";


//execute query 
$res=mysqli_query($conn,$sql);
if ($res==true) {
    $count=mysqli_num_rows($res);
    if ($count==1) {
        // user exist and  password 
        //echo "User Found";
        if ($newpassword==$confirm_password) {
            //update the password
            //echo "Password Match"
             $sql2="UPDATE admin SET
             password='$new_password'
             WHERE id=$id
             ";
           //Execute the query
           $res=mysqli_query($conn,$sql);

           //check whethe te query executed
           
           if ($res2==true) {
            //display Succes Message 
            
             //redirect to manage Admin
             $_SESSION['Change -pwd']=
             "<div class='success'>Password changed succes</div>";
             //redicrect
             header('location:'.SITEURL.'admin/manage-admin.php');
           }
           else
           {
             //display error message
             $_SESSION['Change -pwd']=
             "<div class='error'>Failed to change Password</div>";
             //redicrect
             header('location:'.SITEURL.'admin/manage-admin.php');
             
           }
             
        }
        else {
            //redirect to manage Admin
            $_SESSION['pwd-not-match']=
         "<div class='error'>Password did not Patch</div>";
         //redicrect

         header('location:'.SITEURL.'admin/manage-admin.php');
        }
        
    }
    else
    {
         $_SESSION['user-not-found']=
         "<div class='error'>User Not Found</div>";
         //redicrect

         header('location:'.SITEURL.'admin/manage-admin.php');

    }
}
}

?>

<?php include ('partials/footer.php');?>