<!DOCTYPE html>
<!--Created by Kush Singh Chibber-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About us</title>
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
<div class="container-fluid aboutSlider">
    <br>
    <!--Carousel-->
<div class="carousel slide rounded px-5" data-interval="2000" id="aboutCarousel" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../media/group-pic.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
    <!--Carousel Body-->
                <p class="h5 text-light">We are an elite group of engineer working together to give you hands down the
                    most
                    hassle-free auto repair service experience.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../media/fixingcar.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <p class="h5 text-light">We have been determined generation after generation to fix your car just like
                    it was at our home garage.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../media/mr.rockford.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <p class="h5 text-light">Which ironically is the place from where Tech-Mech Started.In the garage of
                    Mr.RockFord more then 100 years ago.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../media/happyEmployee.jpg" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
                <p class="h5 text-light">We have state-of-the-art equipment for optimal performance result and Happy
                    Customers.</p>
            </div>
        </div>
    </div>
</div>
    <br>
</div>
<!--Equally Divided row of 4 by 2-->
<div class="jumbotron align-content-center" id="aboutBanner">
    <div class="row equal">
        <div class="col-md-6 justify-content-center" id="one">
            <section class="col-lg-6 justify-content-center">
                <img id="sectionImage" src="../media/at-white-512.png" alt="Card image cap">
                <p class="h6 text-light "><img src="../media/facebook.png">/TechMech&nbsp;<img
                            src="../media/iconfinder_Instagram_1298747.png">/TechMech
                    <br><img src="../media/twitter-16.png">/TechMech&nbsp;<img src="../media/email.png">info@techmech.com
                </p>
            </section>
        </div>

        <div class="col-md-6 justify-content-center" id="two">
            <section class="col-lg-6 justify-content-center">
                <img src="../media/established.png" alt="Card image cap" id="sectionImage">
                <p class="h6 text-light ">Established in 1894. By Mr. RockFord sr. and Mr. Wellington to provide top
                    notch service
                    to the town citizens.</p>
            </section>
        </div>
        <div class="col-md-6 justify-content-center" id="three">
            <section class="col-lg-6 justify-content-center pt-4">
                <a href="https://goo.gl/maps/mCWWEUWSNXD44Dxr7">
                    <img id="sectionImage" src="../media/maps-and-flags.png" alt="Card image cap">
                </a>
                <p class="h6 text-light card-text text-center pt-4">16 Crumlin Rd, Dolphin's Barn, Drimnagh, Dublin</p>
            </section>

        </div>
        <div class="col-md-6 px-4 justify-content-center rounded" id="four">

            <div class="container px-5">
                <strong class="h2 text-left text-white">Quick Query</strong>
                <form action="..." method="post" id="contactFrm" name="contactFrm">
                    <div class="input-group input-group-sm mb-3 mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3 mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Mobile Number</span>
                        </div>
                        <input type="tel" class="form-control" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3 mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                        </div>
                        <input type="email" class="form-control" aria-label="Sizing example input"
                               aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Your Message</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <input type="submit" value="submit" name="submit" class="btn mb-4">
                </form>
            </div>
        </div>
    </div>
</div>
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
</body>
</html>