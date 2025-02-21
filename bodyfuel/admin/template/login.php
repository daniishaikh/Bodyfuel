<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: #ffffcc; /* Yellow background */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 500px;
            border-radius: 15px;
            background-color: #eee; /* Light gray background */
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow */
        }

        .card-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            width: 100px; /* Adjust the width as needed */
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <section>
            <div class="card">
                <div class="logo-container">
                    <img src="images/logo.png" alt="Logo">
                </div>
                <h2 class="card-title"><b>Body-Fuel</b></h2>
                <h4 class="card-title">Admin Sign-in</h4>
                <form action="../controller/login.php" method="POST">

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-primary btn-lg">Sign-in</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
