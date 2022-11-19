<?php
include_once ('../includes/header.php');
include('session.php');


//Do the query
$query = "SELECT * FROM admins";
$result = mysqli_query($db,$query);
?>



<div class="row py-5">
    <div class="col-3">
    <?php  include('sidebar.php'); ?>
    </div>
    <div class="col-8">
        <h1 class="p-2">All Admins</h1>

        <div class="row ">
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['username']; ?></td>
                        <td>xxxxxxx</td>
                      
                    </tr>
                    <?php }?>

                </tbody>
            </table>
        </div>
    </div>

</div>
<?php
include_once ('../includes/footer.php');
?>