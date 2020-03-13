
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
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin">
                            <div class="form-label-group">
                                <label for="inputEmail">Email address</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

                            </div>

                            <div class="form-label-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                            <hr class="my-4">
                            <span>Dont have an account?</span><span class="link"><a href="register.php">Register</a></span>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <?php include 'includes/footer.php';?>
</body>
</html>