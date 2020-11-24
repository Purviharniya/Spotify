<?php
include 'includes/scripts.php';
include 'includes/config.php';
?>


<?php
$e1 = "";
$e2 = "";
$e3 = "";
if (isset($_POST["submit"])) {
    $email = $_POST["Email"];
    $pass = $_POST["password"];
    $pass = md5($pass);

    $query = mysqli_query($con, "SELECT * FROM users where email='$email'");
    $result = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) != 1) {
        $e1 = "User does not exist";
    }

    if ($pass = !$result["password"]) {
        $e2 = "Password incorrect";
    }

    $query2 = mysqli_query($con, "SELECT * from premiumusers where email='$email'");
    $result2 = mysqli_fetch_array($query);
    if (mysqli_num_rows($query2) != 1) {
        $q3 = mysqli_query($con, "INSERT into premiumusers values('','$email')");
        echo "<script>alert('registered as a premium user');</script>";
    } else {
        $e3 = "You are already a premium user";
    }

}

?>



<html>

<head>
    <title>Spotify</title>
    <link rel="stylesheet" href="assets/styles/premium.css">
    <link rel="stylesheet" href="assets/styles/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <section class="navigation bar">
        <nav class="navbar navbar-expand-lg py-4 home-navbar" style="z-index:8">
            <div class="container">
                <a class="navbar-brand home-navbar-brand" href="/spotify/index.php"><img
                        src="assets/images/home/logo.png" class="img-fluid" height="40" width="45"> Spotify</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#homenav"
                    aria-controls="homenav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars" style="color:#e6e6ff"></span>
                </button>

                <div class="collapse navbar-collapse" id="homenav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item pr-4">
                            <a class="home-link nav-link" href="premium.php"><i class=" fa fa-credit-card"></i> Premium
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="home-link nav-link" href="#"><i class="fa fa-question-circle "></i> Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="home-link nav-link d-none d-md-block"> | </a>
                        </li>
                        <li class="nav-item">
                            <a class="home-link nav-link d-block d-md-none"> --- </a>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="home-link nav-link" href="signup.php"><i class="fa fa-sign-in"></i> Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="home-link nav-link" href="signin.php"> <i class="fa fa-user-circle-o"></i> Log
                                in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="premium-info">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 col-md-6 align-self-center">
                    <h1 class="sp-1">Get 1 year of Premium for Rs.999</h1>
                    <h2 class="sp-2">Unlock some great music albums, created JUST FOR YOU!</h2>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <img src="assets/images/home/premium.jpg" height="150%" width="90%"></img>
                </div>
                <div class="col-12 col-md-12">
                    <a href="#get-premium">
                        <button class="btn-pre btn">
                            GET PREMIUM
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section class="benefits mt-5">
        <h1 class="text-center pb-5 text-uppercase font-weight-bold" style="font-size:3rem;">
            The power of Premium
        </h1>
        <div class="card-deck pcards text-center">
            <div class="card text-center">
                <img src="assets/images/home/p1.png" class="card-img-top" width="60%" height="50%">
                <div class="text-center card-body">
                    <p class="card-text pre-text">Unlock Special Albums, Only For You!</p>
                </div>
            </div>
            <div class="card text-center">
                <img src="assets/images/home/p3.png" class="card-img-top" width="60%" height="50%">
                <div class="text-center card-body">
                    <p class="card-text pre-text">Get Top Artist Podcasts, Albums, and Premium Songs!</p>
                </div>
            </div>
            <div class="card text-center">
                <img src="assets/images/home/p2.png" class="card-img-top" width="60%" height="50%">
                <div class="text-center card-body">
                    <p class="card-text pre-text">Get update letters and emails!</p>
                </div>
            </div>
            <div class="card text-center">
                <img src="assets/images/home/p4.png" class="card-img-top" width="60%" height="50%">
                <div class="text-center card-body">
                    <p class="card-text pre-text">Get chances to win free concert tickets!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="apply-premium p-5 " id="get-premium">
        <h1 class="text-center"> BE OUR PREMIUM MEMBER</h1>
        <div class="mt-5">
            <form action="premium.php" method="post" class="pre-form">
                <div class="form-group">
                    <label for="Email">Email address:</label>
                    <input type="email" class="form-control pre-input" id="Email" name="Email">
                    <div class="error"> <?php echo $e1; ?></div>
                    <div class="error"> <?php echo $e2; ?></div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control pre-input" id="password" name="password">
                    <div class="error"> <?php echo $e3; ?></div>
                </div>
                <input type="submit" value="submit" name="submit" class="btn-pre1">
            </form>
        </div>

    </section>
    <section class="footer-sec">
        <div class="container-fluid footer py-4">
            <div class="row text-center pb-4">
                <div class="col-12">
                    <span class="fa fa-instagram social"></span>
                    <span class="fa fa-twitter social mx-2"></span>
                    <span class="fa fa-facebook social"></span>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    Made by Purvi & Atharva, KJSCE | &copy; 2020
                </div>
            </div>
        </div>
    </section>

    <body>

</html>