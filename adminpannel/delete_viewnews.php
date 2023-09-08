<?php

include('connection.php');

$ids = $_GET['id'];

$deletequery = "DELETE FROM `news` WHERE id ='$ids'";

$result = mysqli_query($conn, $deletequery);

if ($result) {
    header('location:viewnews.php');
} else {
?>
    <script>
        alert("No data deleted...");
    </script>
<?php
}

?>