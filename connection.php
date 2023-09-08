<?php

$username = "root";
$password = "";
$server = "localhost";
$database = "techstep_cts";

$conn = mysqli_connect($server,$username,$password,$database);

if($conn){
        ?>
        <!-- <script>
            alert('Connection Successfull.');
        </script> -->
        <?php
            }
    else{
        ?>
        <script>
            alert('No! Connection.');
        </script>

        <?php
    }
?>
