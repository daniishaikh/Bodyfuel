<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trainer Sign-in</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/logo.png" />
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .auth-form-light {
            background-color: #ffffcc; /* Yellow background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 400px;
            width: 100%;
        }

        .btn-primary {
            background-color: #ffcc00; /* Yellow button color */
            border-color: #ffcc00; /* Yellow border color */
        }

        .btn-primary:hover {
            background-color: #e6b800; /* Darker yellow on hover */
            border-color: #e6b800;
        }

        .brand-logo h3 {
            color: #ffcc00; /* Yellow text color */
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h4 {
            color: #333; /* Black text color */
            font-size: 24px;
            margin-bottom: 10px;
        }

        h6 {
            color: #666; /* Gray text color */
            font-size: 16px;
            margin-bottom: 30px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo" width="150">
        </div>
        <h4>Trainer Sign-in</h4>
        <h6 class="font-weight-light">Sign in to continue.</h6>
        <form class="pt-3" action="../controller/login.php" method="POST">
            <div class="form-group">
                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Your Email">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control form-control-lg"
                    id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="mt-3">
                <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Sign
                    In</button>
            </div>
        </form>
    </div>
    <!-- base:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
