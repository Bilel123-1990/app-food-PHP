<?php include('partials/menu.php') ;?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>

        <br> <br>
        <?php
          $id=$_GET['id'];
          
          $sql="SELECT * FROM admin WHERE id=$id";

          $res=mysqli_query($conn,$sql);
if ($res==true) {
    $count=mysqli_num_rows($res);

    //check wether we have admin
    if ($count==1) {
       //get datails

       //echo "Admin Availble";

       $row=mysqli_fetch_assoc($res);
       $full_name = ['full_name'];
       $username = $row['username'];
    }
    else {
     //redirect to manage admin   
     header('location'.SITEURL.'admin/manage-admin.php');
    }
}


        ?>




        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name </td>
                    <td>
                        <input type="text" name="full_name" value="">
                    </td>
                </tr>
                <tr>
                    <td>User Name </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $full_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="" value="<?php echo $username; ?>" class="btn-secondary">
                    </td>

                </tr>


            </table>

        </form>
    </div>



</div>





<?php include('partials/footer.php')  ?>




<?php
if ($_POST['submit']) {
    echo "button clicked";

    $id =$_POST['id'];
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];



    //create a sql query to update Admin

    $sql=" UPDATE admin SET
    full_name='$full_name',
    username='$username'
    WHERE id='$id'    ";



// execute the qureyr
 $res = mysqli_query($conn,$sql);  
if ($res==true) {
    $_SESSION['update']="<div class='success'>update succefly</div>";
    //reddictrer
    header(('location '));
}
 
}

?>