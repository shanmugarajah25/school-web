<?php
include_once ('../includes/header.php');
include('session.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $title = $_POST["title"];  
    $detail = $_POST["detail"];
    $date = $_POST["date"];
    $status = $_POST["status"];

    if(!empty($title) && !empty($detail) && !empty($date)){
       
        $sql = "INSERT INTO events (title, detail, date, status) VALUES ('$title',  '$detail', '$date','$status')";
      
        $result = $db->query($sql);
        
        if ($result == TRUE) {
              echo "New record created successfully";
        } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $db->close();     
        header("location: events.php"); 
      }       
    }
?>



<div class="row py-5">
    <div class="col-3">
    <?php  include('sidebar.php'); ?>
    </div>

    <div class="col-8">
        <h1 class="p-2">Create Event</h1>

        <div class="row ">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="mb-3">
                    <div class="col-12">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-12">
                        <label class="form-label">Date & Time</label>
                        <input type="datetime-local" class="form-control" name="date" required>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="col-12">
                        <label class="form-label">Detail</label>
                        <textarea class="form-control" rows="3" name="detail" required></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-12">
                        <label class="form-label">Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="active" value="1">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="pending" value="0">
                                <label class="form-check-label" for="pending">Pending</label>
                            </div>
                        </div>

                    </div>

                    <div class="col-6">
                        <input type="submit" class="btn btn-primary mt-4" value="Submit">
                    </div>
                </div>


            </form>
        </div>
    </div>

</div>
<?php
include_once ('../includes/footer.php');
?>