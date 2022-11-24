<?php include('partials/menu.php');?>

</div>
<!--Menu-->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
        </br>

        <?php 
        if (isset($_SESSION['add'])) 
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);//Remouving Session Message
        }
          if (isset($_GET['delete'])) {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
          }
if (isset($_SESSION['user-not-found'])) 
{
    echo $_SESSION['user-not-found'];
    unset($_SESSION['user-not-found']);
}
if (isset($_SESSION['pwd-not-match']) )
{
    echo $_SESSION['pwd-not-match'];
    unset($_SESSION['pwd-not-match']);
}    
if (isset($_SESSION['change-pwd'])) 
{
    echo $_SESSION['change-pwd'];
    unset($_SESION['change-pwd']);
}
 
  

        ?>
        <br><br><br>

        <a href="add-admin.php" class="btn-primary">Add Admin </a>

        </br></br></br>

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>FullName</th>
                <th>Username</th>
                <th>Actions </th>
            </tr>
            <?php 
            //query to get all admin
            $sql="SELECT * from admin";
            $res=mysqli_query($conn,$sql);

            if ($res==TRUE)
             {
                $rows= mysqli_num_rows($res);
                $sn=1;
                
            if($rows>0){
                while($rows=mysqli_fetch_assoc($res))
                {
                    $id=$rows['id'];
                    $fullname=$rows['full_name'];
                    $username=$rows['username'];

                    ?>

            <tr>
                <td> <?php echo $sn++; ?></td>
                <td><?php echo $fullname; ?> </td>
                <td><?php echo $username; ?> </td>
                <td>
                    <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id; ?>"
                        class="btn-primary">Change Password</a>
                    <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">
                        Update Admin</a>
                    <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id; ?>"
                        class="btn-danger">Delete
                        Admin</a>
                </td>
            </tr>


            <?php
            }
            }
            else
            {

            }
            }
            ?>




        </table>
        <div class="clearfix">
        </div>
    </div>
</div>

<?php include('partials/footer.php'); ?>
<!--Menu-->