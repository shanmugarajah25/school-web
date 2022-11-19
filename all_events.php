<?php
include_once ('includes/header.php');


//Do the query
$query = "SELECT * FROM events";
$result = mysqli_query($db,$query);
?>

<h1>Events</h1>

<div class="row">

    <?php while($row = mysqli_fetch_assoc($result)){?>

    <div class="col-4">
        <a href="" class="d-block p-4 m-3 text-dark text-decoration-none border border-primary rounded shadow text-center p-3 bg-primary bg-opacity-25">
           <h5><?php echo $row['title']; ?></h5> 
            <?php echo $row['date']; ?>
    </a>
    </div>
    <?php }?>

</div>

<?php
include_once ('includes/footer.php');
?>