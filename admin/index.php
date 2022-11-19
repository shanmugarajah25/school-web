<?php
include_once ('../includes/header.php');
include('session.php');

$query = "SELECT COUNT(*) as count FROM events";
$result = mysqli_query($db,$query);
$total_events = mysqli_fetch_assoc($result);
?>



<div class="row py-5">
    <div class="col-3">
    <?php  include('sidebar.php'); ?>
    </div>
    <div class="col-8">
        <h1 class="p-2">Admin Dashboard</h1>
        <div class="row ">
            <div class="col-4">
                <a href="events.php"
                    class="d-block  text-dark text-decoration-none border border-success rounded shadow text-center p-3 bg-success bg-opacity-50">
                    <h5> Events</h5>
                    <span class="fw-bold"><?php echo $total_events['count']; ?></span>
                </a>
            </div>
            <div class="col-4">
                <a href="#"
                    class="d-block text-dark text-decoration-none border border-primary rounded shadow text-center p-3 bg-primary bg-opacity-50">
                    <h5> Admin Users</h5>
                    <span>01</span>
                </a>
            </div>

            <div class="col-4">
                <a href="#"
                    class="d-block  text-dark text-decoration-none border border-warning rounded shadow text-center p-3 bg-warning bg-opacity-50">
                    <h5> Admins</h5>
                    <span>01</span>
                </a>
            </div>
        </div>
    </div>

</div>
<?php
include_once ('../includes/footer.php');
?>