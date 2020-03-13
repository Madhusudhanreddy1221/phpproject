
<!DOCTYPE html>
<html>
<head>
    <title>Job Portal-Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/Script.js"></script>
</head>
<body>
    <?php include 'includes/header.php';?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                        <form class="form-signin">
                            <div class="form-label-group">
                                <label for="inputEmail">Username</label>
                                <input type="text" id="username" class="form-control" placeholder="Username" required autofocus>
                            </div>
                            <div class="form-label-group">
                                <label for="Email">Email address</label>
                                <input type="email" id="Email" class="form-control" placeholder="Email address" required autofocus>
                            </div>
                            <div class="form-label-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" id="Password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-label-group">
                                <label for="inputPassword"> Confirm Password</label>
                                <input type="password" id="CPassword" class="form-control" placeholder=" Confirm Password" required>
                            </div>
                            <div>
                                <p></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary  text-uppercase" type="submit">Register</button>
                            </div>
                            <hr class="my-4">
                            <span>Already have an account? </span><span class="link"><a href="login.php">Sign In</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php';?>
</body>
</html>