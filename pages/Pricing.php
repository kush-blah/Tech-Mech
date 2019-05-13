<!DOCTYPE html>
<!--Created by Kush Singh Chibber-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pricing</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css" type="text/css">
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
    <script src="../js/custom.js"></script>
</head>
<body>
<!--Header-->
<?php include('nav-header.html'); ?>
<div class="container-fluid" id="banner">
    <div class="row float-right" id="loginPricing">
        <button class="loginButton" onclick="toggle()"><b>Login</b></button>
        <span class="container-fluid justify-content-center loginDialog"
              id="login-dialog"><?php include("Login-Signup.php"); ?></span>
    </div>
    <!--Hover row-->
    <div class="row subscriptions">
        <div class="card" id="Quarter">
            <div class="card-body">
                <h5 class="card-title">Quarterly Pack</h5>
                <h3>&euro;300</h3>
                <hr>
                <p class="card-text">A single service of your selection every 3 months. Great deal for the general car
                    users in the city.</p>
            </div>
        </div>
        <div class="card" id="Year">
            <div class=
                 "card-body">
                <h5 class="card-title">Yearly Pack</h5>
                <h3>&euro;1000</h3>
                <hr>
                <p class="card-text">A single service of your selection every 3 months. Great deal for the general car
                    users in the city.</p>
            </div>
        </div>
        <div class="card" id="Half">
            <div class="card-body">
                <h5 class="card-title">Half Pack</h5>
                <h3>&euro;500</h3>
                <hr>
                <p class="card-text">A single service of your selection every 3 months. Great deal for the general car
                    users in the city.</p>
            </div>
        </div>

    </div>
</div>
<br>
<h2 class="or"><i>--OR--</i></h2>
<h3 style="text-align: center">Select a One Time Package.</h3>
<br>
<!--Services-->
<div class="container">
    <div class="row justify-content-center">
        <div class="card packages">
            <!-- content of the card goes here -->
            <img src="../media/carwash.jpg" alt="Picture" class="card-img-top">
            <div class="layer">
            </div>
            <!-- this content is displayed over the image, which is now in the background and covers the whole element -->
            <div class="card-img-overlay text-left text-black-50"> <p class="h4">The Regular</p>
                    A Cosmetic wash your car.<br>
                    Our Skilled Technicians will cleanse every Knook and Cranny of Car.
                    <br><strong class="h3">&euro;35</strong>
            </div>
        </div>
        <div class="card packages">
            <!-- content of the card goes here -->
            <img src="../media/roadTrip.jpg" alt="Picture" class="card-img-top">
            <div class="layer">
            </div>
            <!-- this content is displayed over the image, which is now in the background and covers the whole element -->
            <div class="card-img-overlay text-left text-black-50"> <p class="h4">One for the road</p>
                We will get you up <br>
                and running for the road.
                <br>
                <br><strong class="h3">&euro;57</strong>
            </div>
        </div>
        <div class="card packages">
            <!-- content of the card goes here -->
            <img src="../media/backHome.jpg" alt="Picture" class="card-img-top">
            <div class="layer">
            </div>
            <!-- this content is displayed over the image, which is now in the background and covers the whole element -->
            <div class="card-img-overlay text-left text-black-50"><p class="h4">Back Home</p>
                Give your car a treat<br>
                The care it needs after a long run.<br>
                <br><strong class="h3">&euro;63</strong>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card packages">
            <!-- content of the card goes here -->
            <img src="../media/breakDown.jpg" alt="Picture" class="card-img-top">
            <div class="layer">
            </div>
            <!-- this content is displayed over the image, which is now in the background and covers the whole element -->
            <div class="card-img-overlay text-left text-black-50"><p class="h4">The Break-Down </p>
                If it ain't starting<br>
                Our Skilled Technicians will cleanse every Knook and Cranny of Car.
                <br><strong class="h3">&euro;100</strong>
            </div>
        </div>
        <div class="card packages">
            <!-- content of the card goes here -->
            <img src="../media/major-repair.jpg" alt="Picture" class="card-img-top">
            <div class="layer">
            </div>
            <!-- this content is displayed over the image, which is now in the background and covers the whole element -->
            <div class="card-img-overlay text-left text-black-50"><p class="h4">The Overhaul</p>
                    Need more Torque?<br>
                    Custom Performance tweaking.<br>
                    <br>
                    <strong class="h4">&euro;250</strong>
                </div>
            </div>
        <div class="card packages">
            <!-- content of the card goes here -->
            <img src="../media/accident.jpg" alt="Picture" class="card-img-top">
            <div class="layer">
            </div>
            <!-- this content is displayed over the image, which is now in the background and covers the whole element -->
            <div class="card-img-overlay card-body text-left text-black-50"><p class="h4">The Accident</p>
                We are here for you.<br>
                Come with a towing service and Total Fix(like new).
                <br><strong class="h4">&euro;60 and Part & Labour</strong>
            </div>
        </div>
    </div>
</div>
<br>
</body>
</html>