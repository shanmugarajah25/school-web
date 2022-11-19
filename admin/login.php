<?php
include_once ('../includes/header.php');
session_start();
   $error = "";  
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($db,$_POST['username']);
   $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
   
   $sql = "SELECT id FROM admins WHERE username = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
 
   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
    //  session_register("myusername");
      $_SESSION['login_user'] = $myusername;
      
      header("location: index.php");
   }else {
      $error = "Your Login Name or Password is invalid";
   }
}
?>
<div class="row">
    <div class="col-lg-4 mx-auto border shadow p-5 my-5">     
        <h3 class="text-center">Admin Login</h3>
<?php
if($error)
{
?>
        <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
        </div>
<?php 
}
?>
            <form action="" method="post">
                <label class="col-sm-2 col-form-label">UserName</label>

                <input type="text" name="username" class="form-control" />

                <label class="col-sm-2 col-form-label">Password</label>
                <input type="password" name="password" class="form-control" />

                <input type="submit" value="Submit" class="btn btn-primary mt-3" />
            </form>

            <div style="font-size:11px; color:#cc0000; margin-top:10px"></div>  
    </div>
</div>


<?php
include_once ('../includes/footer.php');
?>