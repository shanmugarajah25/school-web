<?php
include_once ('../includes/header.php');
include('session.php');


//Do the query
$query = "SELECT * FROM events";
$result = mysqli_query($db,$query);
?>



<div class="row py-5">
    <div class="col-3">
    <?php  include('sidebar.php'); ?>
    </div>
    <div class="col-8">
        <h1 class="p-2">All Events</h1>

        <div class="row ">
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                            <?php if($row['status'] == 1)                            
                            {
                                echo '<span class="badge bg-success">Active</span>';
                            }

                            else {
                                echo '<span class="badge bg-warning text-dark">Pending</span>';
                            }
                            ?>

                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success">View</a>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>

                        </td>
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