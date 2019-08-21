<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Handyman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <header id="header-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <!-- logo images -->
                        <img src="../resources/img/Logo.png" alt="Logo Pic">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="header-text">
                        <h1>Handyman</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


<!-- main content section -->
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="login">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username or Email:</label>
                            <input type="text" class="form-control" name="username" value="" placeholder="enter email or username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" value="" placeholder="enter pass">
                        </div>
                        <a style="float: right; text-decoration: none; color: white;" href="password_reset/index.php">Forgot password</a>
                        <input type="submit" name="submit" value="Login" class="btn btn-info btn-sm"> 
                    </form>
                </div>
            </div>
        </div>
    </div>


<footer>
        <div class="container">
            <div class="row">
                <div class="footer-content">
                    <p>Copyright &copy;2019 | All Right Reserved by @</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- optional javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</body>
</html>