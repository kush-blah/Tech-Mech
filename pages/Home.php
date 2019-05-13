<!DOCTYPE html>
<!--Created by Kush Singh Chibber-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/custom.css" type="text/css">
</head>
<body>
<header>
    <?php include('nav-header.html'); ?>
</header>
<!--image container-->
<section class="parallax">
    <div class="parallax-inner">
        <div class="border-bottom">
            <!--Login Button-->
            <button class="loginButton" onclick="toggle()"><b>Login</b></button>
            <div class="embed-responsive embed-responsive-21by9">
                <video width="320px" height="240px" autoplay loop>
                    <source src="../media/promo.mp4" type="video/mp4">
                </video>
            </div>
            <h1 id="tagline"><i>Treat your car the way it Deserves to be Treated!</i></h1>
            <span class="container-fluid justify-content-center loginDialog"
                  id="login-dialog"><?php include("Login-Signup.php"); ?></span>
            <section class="section mt-5">
                <div class="container">
                    <div class="d-flex">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="counter" data-count="26">0</div>
                        </div>
                        <div class="col-md-6 text-left px-5">
                            <p class="h2 text-left text-light">Point Precision Test</p>
                            <p class="font-italic text-left text-light">Our test help us pin point problems fast. So you
                                dont have to wait more then you need to!</p>
                            <p class="font-italic text-left text-light">The faster we are the happier you are.</p>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex">
                        <div class="col-md-2"></div>
                        <div class="col-md-6 text-left px-5">
                            <p class="h2 text-left pt-4 text-light">Home Service</p>
                            <p class="font-italic text-left text-light">If you cant come to us We will Come to you.</p>
                        </div>
                        <div class="col-md-2">
                            <img src="../media/home.png">
                        </div>
                    </div>
                    <br>
                    <div class="d-flex">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <img src="../media/shield.png">
                        </div>
                        <div class="col-md-6 text-left px-5">
                            <p class="h2 text-left pt-4"></p>
                            <p class="font-italic text-left text-light">We provide a guarantee with every Service and
                                Subscription. </p>
                            <p class="font-italic text-left text-light">If you face any problem within a specific time
                                period after the service.</p>
                            <p class="font-italic text-left text-light">Feel free to drop by and get it fixed. No
                                Cost!</p>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <img src="../media/save-Money.png">
                        </div>
                        <div class="col-md-6 text-left px-5">
                            <p class="h2 text-left pt-4 text-light">Save With us</p>
                            <p class="font-italic text-left text-light">Custom in-house parts. Dont pay more then you
                                have
                                to.</p>
                        </div>
                        <div class="col-md-2">
                            <img src="../media/gears.png">
                        </div>
                    </div>
                    <br>
                </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card bg-transparent border-0">
                        <img class="card-img-top logo img-fluid" src="../media/Mazda-logo.png" alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-transparent border-0">
                        <img class="card-img-top logo img-fluid" src="../media/Mitsubishi-logo.png"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-transparent border-0">
                        <img class="card-img-top logo img-fluid" src="../media/opel_logo.png" alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-transparent border-0">
                        <img class="card-img-top logo img-fluid" src="../media/subaru.png" alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-transparent border-0">
                        <img class="card-img-top logo img-fluid" src="../media/volkswagon.png" alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-transparent border-0">
                        <img class="card-img-top logo img-fluid" src="../media/nissan.png" alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-transparent border-0">
                        <img class="card-img-top logo img-fluid" src="../media/Honda-logo.png" alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-transparent border-0">
                        <img class="card-img-top logo img-fluid" src="../media/audi.png" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>