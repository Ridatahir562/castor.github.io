<?php

include('connection.php');

$ids = $_GET['id'];

$deletequery = "DELETE FROM `product` WHERE id ='$ids'";

$result = mysqli_query($conn, $deletequery);

if ($result) {
    header('location:viewproduct.php');
} else {
?>
    <script>
        alert("No data deleted...");
    </script>
<?php
}

?>