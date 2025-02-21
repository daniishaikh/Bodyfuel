<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signin</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
        body {
            background-image: url('img/hero/heroo.jpg'); /* Specify the path to your background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Ensure the background image stays fixed as the user scrolls */
            margin: 0;
            padding: 0;
            height: 100vh; /* Make the body fill the viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.8); /* Adjust the opacity for transparency */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Add a slight shadow for better visibility */
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 15px 15px 0 0;
        }

        .container {
            max-width: 400px; /* Adjust the maximum width of the container */
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h2>Body-fuel</h2>
                <h4>User Sign-in</h4>
            </div>
            <div class="card-body">
                <form action="controller/login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-primary">Sign-in</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <h5>Not Registered? <a href="register.php">Sign-up</a></h5>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
