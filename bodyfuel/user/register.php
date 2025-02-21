<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <style>
        body {
            background-image: url('img/hero/heroo.jpg'); /* Specify the path to your background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card {
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Body-Fuel</h2>
                        <h4>User Sign up</h4>
                    </div>
                    <div class="card-body">
                        <form action="controller/register.php" method="POST">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" id="name" class="form-control" required pattern="[a-zA-Z][a-zA-Z ]{2,}" title="Please Enter Valid Name">
                            </div>
                            <div class="form-group">
                                <label for="age">Your Age</label>
                                <input type="number" name="age" id="age" class="form-control" required title="Enter Your Age">
                            </div>
                            <div class="form-group">
                                <label for="phone">Your Phone Number</label>
                                <input type="tel" name="phone" id="phone" class="form-control" required pattern="[0-9]{10}" title="Please Enter Valid Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            </div>
                            <div class="form-group">
                                <label for="repassword">Repeat your password</label>
                                <input type="password" name="repassword" id="repassword" class="form-control" required title="Retype Your Password">
                            </div>
                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <h5>Already Have Account? <a href="signin.php">Sign-in</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
