
<?php
session_start();

include('connection.php');

if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $pswd= $_POST['pswd'];

    $sql = "SELECT * FROM `admin` WHERE `email`='$email' AND `pswd`='$pswd'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result);
    

   if($row > 0){

    $row1 = mysqli_fetch_assoc($result);
    $_SESSION['aid']=$row1['id'];
    $_SESSION['first_name']=$row1['first_name'];
    $_SESSION['image']=$row1['profile'];
    header('location:dashboard.php');

    ?>

    <script>
             alert("account login Successfully");
    </script>

    <?php
   }
   else{
    ?>
    <script>
            alert("Email & Password not match");
    </script>
    <?php
   }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="">
        <div id="layoutAuthentication" style="margin-top: 100px;">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Login</h3></div>
                                    <div class="card-body">
                                        <form m method="POST" enctype="multipart/form-data">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password"  name="pswd"/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                           
                                            <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-block" href="" name="submit">Update</button>
                                                </div>
                                         
                                        </form>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
         
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
