<?php

include ('connection.php');

$ids = $_GET['id'];

$deletequery = "DELETE FROM `registration` WHERE id ='$ids'";

$result = mysqli_query($conn,$deletequery);

if($result){
    // header('location: display.php?msg=Record Deleted Successfully');
header('location:userrecord.php');
}
else{
    ?>
    <script>
        alert("No data deleted...");
    </script>
    <?php
}

?>
