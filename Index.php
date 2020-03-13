<html>
    <head>
        <title>
            Job Portal
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/Script.js"></script>
    </head>
    <body>
        <header>
            <nav id="navigation">
                <div id="logo">
                    <span id="logo"><img src="images/logo.png" /></span>
                </div>
                <div id="nav_links">
                    <ul>
                        <li><span class="link" href="#">Find Jobs</span></li>
                        <li><span class="link" href="#">Company Reviews</span></li>
                        <li><span class="link" href="#">Find Salaries</span></li>
                    </ul>
                </div>
                <div id="nav_icons">
                    <ul>
                        <li class="link"><i class="fad fa-comments-alt fa-lg"></i></li>
                        <li class="link"><i class="far fa-bell fa-lg"></i></li>
                        <li class="link"><i class="far fa-user fa-lg"></i></li>
                    </ul>
                </div>
                <div id="add_job">
                    <span class="link"><a href="login.php">Login</a></span>
                    <span class="link"><a href="register.php">Register</a></span>
                </div>
            </nav>
        </header>

        <main id="main">
            <section id="section1">
                <h1>Find your dream job</h1>
                <h2>Discover thousands of jobs and reviews</h2>

                <form method="post" action="#">
                    <input type="text" name="search" id="search" placeholder="title,keywords, or company">
                    <input type="submit" class="btn btn-primary" value="Find Jobs">
                </form>
            </section>
            <section id="section2">
                <article id="popularCompanies">
                    <h1>Popular Companies</h1>
                    <div class="card-deck">
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Amazon</div>
                            <div class="card-body">
                                <h5 class="card-title">Reviews</h5>
                                <p class="card-text">1. Reviews for amazon</p>
                                <p class="card-text">2. Reviews for amazon</p>
                            </div>
                        </div>
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Amazon</div>
                            <div class="card-body">
                                <h5 class="card-title">Reviews</h5>
                                <p class="card-text">1. Reviews for amazon</p>
                                <p class="card-text">2. Reviews for amazon</p>
                            </div>
                        </div>
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Amazon</div>
                            <div class="card-body">
                                <h5 class="card-title">Reviews</h5>
                                <p class="card-text">1. Reviews for amazon</p>
                                <p class="card-text">2. Reviews for amazon</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck">
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Amazon</div>
                            <div class="card-body">
                                <h5 class="card-title">Reviews</h5>
                                <p class="card-text">1. Reviews for amazon</p>
                                <p class="card-text">2. Reviews for amazon</p>
                            </div>
                        </div>
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Amazon</div>
                            <div class="card-body">
                                <h5 class="card-title">Reviews</h5>
                                <p class="card-text">1. Reviews for amazon</p>
                                <p class="card-text">2. Reviews for amazon</p>
                            </div>
                        </div>
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Amazon</div>
                            <div class="card-body">
                                <h5 class="card-title">Reviews</h5>
                                <p class="card-text">1. Reviews for amazon</p>
                                <p class="card-text">2. Reviews for amazon</p>
                            </div>
                        </div>
                    </div>

                </article>
            </section>
        </main>
        <footer>
            <div id="footer_links">
                <ul>
                    <li><span class="link" href="#">Jobs</span></li>
                    <li>-</li>
                    <li><span class="link" href="#">Browse Companies</span></li>
                    <li>-</li>
                    <li><span class="link" href="#">Salaries</span></li>
                    <li>-</li>
                    <li><span class="link" href="#">Browse Jobs</span></li>
                    <li>-</li>
                    <li><span class="link" href="#">Employer Events</span></li>
                    <li>-</li>
                    <li><span class="link" href="#">About</span></li>
                    <li>-</li>
                    <li><span class="link" href="#">Help Centre</span></li>
                </ul>
            </div>
            <div id="footer_copyright">
                <p>&copy; 2020 Brogrammers Inc</p>
            </div>
        </footer>
    </body>
</html>
