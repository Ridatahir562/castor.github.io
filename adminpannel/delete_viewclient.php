<?php

include('connection.php');

$ids = $_GET['id'];

$deletequery = "DELETE FROM `client` WHERE id ='$ids'";

$result = mysqli_query($conn, $deletequery);

if ($result) {
    header('location:viewclients.php');
} else {
?>
    <script>
        alert("No data deleted...");
    </script>
<?php
}

?>