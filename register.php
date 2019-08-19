<?php
    if (isset($_POST['submit'])) {
        require_once 'classes/RegistrationClass.php';
        $obj = new RegistrationClass();
        $obj->registrationAction($_POST);
/*
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "attendance_management_db";

      Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
    }

       try{
            $first_name_value = $_POST['first_name'];
           $last_name_value = $_POST['last_name'];
           $email_value = $_POST['email'];
            $password_value = $_POST['password'];
           $repeat_password_value = $_POST['repeat_password'];
           //  echo $first_name_value."=>".$last_name_value."=>".$email_value.$password_value; die;
            $insert_value = "INSERT INTO user_registration (firstname, lastname,email,password,repeatpassword) VALUES ('$first_name_value','$last_name_value','$email_value','$password_value','$repeat_password_value')";
           if ($conn->query($insert_value) === TRUE) {
                echo "New record created successfully";
           } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
            }

        } catch (Exception $e) {
           print_r($e);
            die;
       }

     die;

        $insert_value = "INSERT INTO user_registration (firstname, lastname,email,password,repeatpassword) VALUES ('first_name','last_name','email','password','repeat_password')";*/



    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>



                        <form class="user" action="register.php" method="post">

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="first_name" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="last_name" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" name="repeat_password" placeholder="Repeat Password">
                                </div>
                            </div>
                            <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">Register Account</a>-->
                            <input type="submit" name="submit" value="submit" class="btn btn-primary btn-user btn-block">

                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>








                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.html">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>


