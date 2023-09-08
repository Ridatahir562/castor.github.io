<?php

include('connection.php');

$ids = $_GET['id'];

$deletequery = "DELETE FROM `admin` WHERE id ='$ids'";

$result = mysqli_query($conn, $deletequery);

if ($result) {
    header('location:viewadmin.php');
} else {
?>
    <script>
        alert("No data deleted...");
    </script>
<?php
}

?>