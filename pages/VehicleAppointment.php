<!DOCTYPE html>
<!--Created by Kush Singh Chibber-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css" type="text/css">
</head>
<body>
<header>
    <!--Include Navigation-->
    <?php include('nav-header.html'); ?>
</header>
<div class="appointment">
    <section>
            <h3 class="mx-5 text-white">Select or Add Vehicle</h3>
            <div class="row mx-lg-5">
                <!--Card for vehicle details-->
                <div class="col-lg-2 ml-5 justify-content-center card addVehicle">
                    <div class="card-body">
                       <!--Car Details-->
                        <p><strong>Car Name: </strong></p>
                        <p>Registration Number:</p>
                        <p>Type: </p>
                        <p>Color: </p>
                    </div>
                </div>
                <div class="col-lg-2 ml-5 justify-content-center card addVehicle">
                    <br>
                    <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#modalVehicle">
                        <img class="px-lg-5" src="../media/add.png">
                    </button>
                    <br>
                </div>
            </div>
    </section>
    <div class="modal fade" id="modalVehicle" tabindex="-1" role="dialog" aria-labelledby="modalVehicle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                  <?php include('addVehicle.html'); ?>
                </div>

            </div>
        </div>
    </div>
    <hr>
    <section>
        <form class="container" action="..." method="post" id="contactFrm" name="contactFrm">
            <fieldset>
                <legend class="text-white">Book Your Appointment</legend>
                <div class="input-group input-group-sm mb-3 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Package/Subscription Name</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Date</span>
                    </div>
                    <input type="date" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Time</span>
                    </div>
                    <input type="time" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="form-check">
                    <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optRadio" value="home">Home Service
                    </label>
                    <br>
                    <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optRadio" value="workshop">WorkShop Visit
                    </label>
                </div>
                <br>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Your Message</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <input type="submit" value="submit" name="submit" class="btn mb-4">
            </fieldset>
        </form>
    </section>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="../js/custom.js"></script>
</body>
</html>