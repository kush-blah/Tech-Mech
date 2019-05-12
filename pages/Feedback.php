<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="../css/custom.css" type="text/css">
</head>
<body>
<?php include('nav-header.html') ?>
<div class="container-fluid" id="feedbackContainer">
    <form class="form-horizontal justify-content-center feedbackForm">
        <fieldset>
            <legend class="text-white">Customer Feedback</legend>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Appointment Number
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <br>
            <strong class="text-white">How was your service experience?</strong>
            <div class="row feedback-buttons">
                <button class="col btn bg-transparent text-center ">
                    1
                </button>
                <button class="col btn bg-transparent text-center">
                    2
                </button>
                <button class="col btn bg-transparent text-center">
                    3
                </button>
                <button class="col btn bg-transparent text-center">
                    4
                </button>

                <button class="col btn bg-transparent text-center">
                    5
                </button>

                <button class="col btn bg-transparent text-center">
                    6
                </button>
                <button class="col btn bg-transparent text-center">
                    7
                </button>
                <button class="col btn bg-transparent text-center">
                    8
                </button>
                <button class="col btn bg-transparent text-center ">
                    9
                </button>
                <button class="col btn bg-transparent text-center">
                    10
                </button>
            </div>
            <br>
            <strong class="text-white">How was did our executives treat you?</strong>
            <div class="row feedback-buttons">
                <div class="col btn bg-transparent text-center ">
                    1
                </div>
                <button class="col btn bg-transparent text-center">
                    2
                </button>
                <button class="col btn bg-transparent text-center">
                    3
                </button>
                <button class="col btn bg-transparent text-center">
                    4
                </button>

                <button class="col btn bg-transparent text-center">
                    5
                </button>

                <button class="col btn bg-transparent text-center">
                    6
                </button>
                <button class="col btn bg-transparent text-center">
                    7
                </button>
                <button class="col btn bg-transparent text-center">
                    8
                </button>
                <button class="col btn bg-transparent text-center ">
                    9
                </button>
                <button class="col btn bg-transparent text-center">
                    10
                </button>
            </div>
            <br>
            <strong class="text-white">How likely are you to visit us again?</strong>
            <div class="row feedback-buttons">
                <div class="col btn bg-transparent text-center ">
                    1
                </div>
                <button class="col btn bg-transparent text-center">
                    2
                </button>
                <button class="col btn bg-transparent text-center">
                    3
                </button>
                <button class="col btn bg-transparent text-center">
                    4
                </button>

                <button class="col btn bg-transparent text-center">
                    5
                </button>

                <button class="col btn bg-transparent text-center">
                    6
                </button>
                <button class="col btn bg-transparent text-center">
                    7
                </button>
                <button class="col btn bg-transparent text-center">
                    8
                </button>
                <div class="col btn bg-transparent text-center ">
                    9
                </div>
                <button class="col btn bg-transparent text-center">
                    10
                </button>
            </div>
            <br>
            <button class="btn btn-success">Submit</button>
        </fieldset>
        <br>
    </form>
</div>
</body>
</html>